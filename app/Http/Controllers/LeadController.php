<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadThankYou;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validação
            $validatedData = $request->validate([
                'email' => 'required|email|max:255',
            ], [
                'email.required' => 'O email é obrigatório',
                'email.email' => 'Formato de email inválido',
                'email.max' => 'Email muito longo',
            ]);

            // Verificar se o email já existe (evitar duplicatas)
            $existingLead = Lead::where('email', $validatedData['email'])->first();
            
            if ($existingLead) {
                return response()->json([
                    'success' => true,
                    'message' => 'Email já cadastrado! Entraremos em contato em breve.',
                    'data' => [
                        'email' => $validatedData['email'],
                        'status' => 'already_registered'
                    ]
                ], 200);
            }

            // Criar novo lead
            $lead = Lead::create($validatedData);

            // Enviar email de agradecimento
            Mail::to($validatedData['email'])->send(new LeadThankYou($lead));

            return response()->json([
                'success' => true,
                'message' => 'Obrigado! Recebemos seu email e entraremos em contato em breve.',
                'data' => [
                    'id' => $lead->id,
                    'email' => $lead->email,
                    'status' => 'registered'
                ]
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Dados inválidos',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            \Log::error('Erro ao processar lead: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Erro interno do servidor'
            ], 500);
        }
    }
}
