# 🏢 Rocha Branca API

API de contato desenvolvida em Laravel para receber formulários do site da Rocha Branca e enviar emails automáticos tanto para a empresa quanto para os clientes.

## 📋 Sobre o Projeto

Esta API foi desenvolvida para processar formulários de contato vindos do frontend React, armazenar os dados no banco e enviar emails de notificação e confirmação com templates HTML profissionais.

## ✨ Funcionalidades

- 📝 **Recebimento de formulários** via POST `/api/contact`
- ✅ **Validação completa** dos dados recebidos
- 💾 **Armazenamento** no banco de dados SQLite
- 📧 **Email para empresa** com dados do contato
- 📨 **Email de confirmação** para o cliente
- 🎨 **Templates HTML** profissionais com logo da Rocha Branca
- 🌐 **CORS configurado** para integração com React
- 🔒 **Validações** em português com mensagens personalizadas

## 🛠️ Tecnologias Utilizadas

- **Laravel 12** - Framework PHP
- **SQLite** - Banco de dados
- **PHP 8.2+** - Linguagem
- **Blade Templates** - Templates HTML para emails
- **Gmail SMTP** - Envio de emails

## 📦 Estrutura do Projeto

```
rochabranca-api/
├── app/
│   ├── Http/Controllers/ContactController.php  # Lógica principal
│   ├── Models/Contact.php                     # Model do contato
│   └── Mail/                                  # Classes de email
├── database/migrations/                       # Estrutura do banco
├── resources/views/emails/                    # Templates HTML
├── routes/api.php                            # Rotas da API
├── config/cors.php                           # Configuração CORS
└── API_DOCUMENTACAO.md                       # Documentação detalhada
```

## 🚀 Como Usar

### 📋 Pré-requisitos

- PHP 8.2 ou superior
- Composer instalado
- Conta Gmail para envio de emails

### ⚙️ Instalação

1. **Clone o repositório:**
```bash
git clone https://github.com/antena1-alex/rochabranca-api.git
cd rochabranca-api
```

2. **Instale as dependências:**
```bash
composer install
```

3. **Configure o ambiente:**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure as credenciais de email no `.env`:**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=seu-email@gmail.com
MAIL_PASSWORD=sua-senha-app
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=seu-email@gmail.com
MAIL_FROM_NAME="Rocha Branca"

COMPANY_EMAIL=seu-email@gmail.com
```

5. **Execute as migrations:**
```bash
php artisan migrate
```

6. **Inicie o servidor:**
```bash
php artisan serve
```

## 📡 Endpoints da API

### POST `/api/contact`

Recebe dados do formulário de contato.

**Headers:**
```
Content-Type: application/json
Accept: application/json
```

**Body:**
```json
{
  "first_name": "João",
  "last_name": "Silva",
  "phone": "(11) 99999-9999",
  "email": "joao@exemplo.com",
  "terms_accepted": true
}
```

**Resposta de sucesso (201):**
```json
{
  "success": true,
  "message": "Contato enviado com sucesso!",
  "data": {
    "id": 1,
    "first_name": "João",
    "email": "joao@exemplo.com"
  }
}
```

**Resposta de erro (422):**
```json
{
  "success": false,
  "message": "Dados inválidos",
  "errors": {
    "first_name": ["O nome é obrigatório"],
    "email": ["Formato de email inválido"]
  }
}
```

## 📧 Sistema de Emails

### Email para a Empresa
- **Assunto:** "Novo contato recebido - Rocha Branca"
- **Conteúdo:** Dados completos do contato
- **Design:** Template HTML com logo e gradiente azul

### Email de Confirmação para o Cliente  
- **Assunto:** "Confirmação de contato - Rocha Branca"
- **Conteúdo:** Confirmação e próximos passos
- **Design:** Template HTML profissional

## 🎨 Personalização

### Modificar Templates de Email
Os templates estão em `resources/views/emails/`:
- `contact_message_html.blade.php` - Email para empresa
- `contact_confirmation_html.blade.php` - Email para cliente

### Alterar Validações
Modificar em `app/Http/Controllers/ContactController.php`:
```php
$validatedData = $request->validate([
    'first_name' => 'required|string|max:255',
    // Adicionar mais validações...
], [
    'first_name.required' => 'Mensagem personalizada',
    // Personalizar mensagens...
]);
```

## 🌐 Integração com React

```javascript
const enviarContato = async (dados) => {
  try {
    const response = await fetch('http://localhost:8000/api/contact', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify(dados)
    });
    
    const resultado = await response.json();
    
    if (response.ok) {
      console.log('Sucesso:', resultado);
    } else {
      console.error('Erro:', resultado.errors);
    }
  } catch (error) {
    console.error('Erro de conexão:', error);
  }
};
```

## 🔧 Configuração para Produção

1. **Configure o domínio no `.env`:**
```env
APP_URL=https://api.rochabranca.com.br
```

2. **Configure banco MySQL/PostgreSQL** (opcional):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rochabranca_api
DB_USERNAME=root
DB_PASSWORD=senha
```

3. **Otimize para produção:**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🧪 Testes

Teste a API usando Postman ou cURL:

```bash
curl -X POST http://localhost:8000/api/contact \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "first_name": "Teste",
    "last_name": "Usuario",
    "phone": "(11) 99999-9999",
    "email": "teste@exemplo.com",
    "terms_accepted": true
  }'
```

## 📝 Logs

Os logs da aplicação ficam em `storage/logs/laravel.log`.

Para monitorar em tempo real:
```bash
tail -f storage/logs/laravel.log
```

## 🤝 Contribuição

1. Fork o projeto
2. Crie uma branch (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👥 Autor

**Alex Silva** - [antena1-alex](https://github.com/antena1-alex)

---

**🏢 Desenvolvido para Rocha Branca** | **⚡ Powered by Laravel**