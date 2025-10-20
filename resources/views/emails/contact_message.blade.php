@component('mail::message')
# Novo contato recebido!

Você recebeu um novo contato através do site da Rocha Branca.

**Dados do contato:**
- **Nome:** {{ $contact['first_name'] }} {{ $contact['last_name'] }}
- **Email:** {{ $contact['email'] }}
- **Telefone:** {{ $contact['phone'] }}
- **Termos aceitos:** {{ $contact['terms_accepted'] ? 'Sim' : 'Não' }}

**Data e hora:** {{ now()->format('d/m/Y H:i:s') }}

@component('mail::button', ['url' => 'mailto:' . $contact['email']])
Responder por Email
@endcomponent

Atenciosamente,<br>
Sistema {{ config('app.name') }}
@endcomponent