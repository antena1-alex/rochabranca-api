# API de Contato - Documentação

## Endpoint da API
- **URL**: `http://127.0.0.1:8003/api/contact`
- **Método**: POST
- **Content-Type**: `application/json`

## Estrutura dos dados

### Dados obrigatórios para enviar:
```json
{
  "first_name": "string (obrigatório)",
  "last_name": "string (obrigatório)",
  "phone": "string (obrigatório)",
  "email": "string - email válido (obrigatório)",
  "terms_accepted": true (obrigatório - deve ser true)
}
```

### Exemplo de uso no React:

```javascript
const enviarContato = async (dados) => {
  try {
    const response = await fetch('http://127.0.0.1:8003/api/contact', {
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
      // resultado.success será true
      // resultado.message contém mensagem de sucesso
      // resultado.data contém dados do contato criado
    } else {
      console.error('Erro:', resultado);
      // resultado.success será false
      // resultado.errors contém os erros de validação
    }
  } catch (error) {
    console.error('Erro de conexão:', error);
  }
};

// Exemplo de uso:
const dadosFormulario = {
  first_name: "João",
  last_name: "Silva",
  phone: "(11) 99999-9999",
  email: "joao@example.com",
  terms_accepted: true
};

enviarContato(dadosFormulario);
```

### Respostas da API:

#### Sucesso (201):
```json
{
  "success": true,
  "message": "Contato enviado com sucesso!",
  "data": {
    "id": 1,
    "first_name": "João",
    "email": "joao@example.com"
  }
}
```

#### Erro de validação (422):
```json
{
  "success": false,
  "message": "Dados inválidos",
  "errors": {
    "first_name": ["O nome é obrigatório"],
    "email": ["Formato de email inválido"],
    "terms_accepted": ["Você deve aceitar os termos para continuar"]
  }
}
```

#### Erro do servidor (500):
```json
{
  "success": false,
  "message": "Erro interno do servidor"
}
```

## Mensagens de erro em português:
- "O nome é obrigatório"
- "O sobrenome é obrigatório"  
- "O telefone é obrigatório"
- "O email é obrigatório"
- "Formato de email inválido"
- "É necessário aceitar os termos"
- "Você deve aceitar os termos para continuar"

## Configurações importantes:
- ✅ CORS configurado para permitir requisições do frontend
- ✅ Validações em português 
- ✅ Banco de dados configurado (SQLite)
- ✅ Model e Migration criados
- ✅ Tratamento de erros implementado

## Para iniciar o servidor:
```bash
cd /caminho/para/rochabranca-api
php artisan serve --port=8003
```

## Campos salvos no banco:
- id (auto incremento)
- first_name
- last_name  
- phone
- email
- terms_accepted (boolean)
- created_at
- updated_at