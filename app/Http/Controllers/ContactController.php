<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactConfirmation;
use App\Models\Contact;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Validação dos dados recebidos
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'terms_accepted' => 'required|boolean|accepted'
            ], [
                'first_name.required' => 'O nome é obrigatório',
                'last_name.required' => 'O sobrenome é obrigatório',
                'phone.required' => 'O telefone é obrigatório',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'Formato de email inválido',
                'terms_accepted.required' => 'É necessário aceitar os termos',
                'terms_accepted.accepted' => 'Você deve aceitar os termos para continuar'
            ]);

            // Salva o contato no banco de dados
            $contact = Contact::create($validatedData);

            // Enviar email para a empresa
            try {
                Mail::to(env('COMPANY_EMAIL', 'aweasley.gina@gmail.com'))
                    ->send(new ContactMessage($contact->toArray()));
            } catch (\Exception $e) {
                \Log::error('Erro ao enviar email para empresa: ' . $e->getMessage());
            }

            // Enviar email de confirmação para o cliente
            try {
                Mail::to($contact->email)
                    ->send(new ContactConfirmation($contact->toArray()));
            } catch (\Exception $e) {
                \Log::error('Erro ao enviar email de confirmação: ' . $e->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Contato enviado com sucesso!',
                'data' => [
                    'id' => $contact->id,
                    'first_name' => $contact->first_name,
                    'email' => $contact->email
                ]
            ], 201);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Dados inválidos',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro interno do servidor'
            ], 500);
        }
    }
}
