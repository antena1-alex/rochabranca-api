@component('mail::message')
# Olá, {{ $contact['first_name'] }}!

Recebemos seu contato e entraremos em contato em breve.

**Resumo dos seus dados:**
- **Nome:** {{ $contact['first_name'] }} {{ $contact['last_name'] }}
- **Email:** {{ $contact['email'] }}
- **Telefone:** {{ $contact['phone'] }}

Nossa equipe analisará sua solicitação e retornará o contato o mais breve possível.

**Tempo estimado de resposta:** 24 a 48 horas

@component('mail::button', ['url' => 'https://rochabranca.com.br'])
Visitar nosso site
@endcomponent

Obrigado pelo seu interesse!<br>
Equipe {{ config('app.name') }}
@endcomponent
