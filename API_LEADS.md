# 📧 API de Leads - Rocha Branca

## Nova Rota: Captação de Leads

### 🎯 **Objetivo**
Captura simples de emails de clientes interessados, com resposta automática de agradecimento.

---

## 📋 **Endpoint da API**

### **URL**: `POST /api/lead`
- **Método**: POST
- **Content-Type**: `application/json`
- **URL completa**: `http://127.0.0.1:8000/api/lead`

---

## 💼 **Dados para enviar**

### **Estrutura JSON:**
```json
{
  "email": "cliente@exemplo.com"
}
```

### **Validações:**
- ✅ **email**: obrigatório, formato válido, máximo 255 caracteres
- ✅ **Duplicatas**: evita emails duplicados automaticamente

---

## 📧 **Como funciona**

1. **Cliente envia email** → API recebe
2. **API valida** → Email válido?
3. **API verifica** → Email já existe?
4. **API salva** → Novo lead no banco
5. **API envia** → Email automático de agradecimento
6. **Cliente recebe** → Confirmação profissional

---

## 🔄 **Respostas da API**

### ✅ **Sucesso - Novo lead (201)**
```json
{
  "success": true,
  "message": "Obrigado! Recebemos seu email e entraremos em contato em breve.",
  "data": {
    "id": 1,
    "email": "cliente@exemplo.com",
    "status": "registered"
  }
}
```

### ✅ **Email já existe (200)**
```json
{
  "success": true,
  "message": "Email já cadastrado! Entraremos em contato em breve.",
  "data": {
    "email": "cliente@exemplo.com",
    "status": "already_registered"
  }
}
```

### ❌ **Erro de validação (422)**
```json
{
  "success": false,
  "message": "Dados inválidos",
  "errors": {
    "email": ["O email é obrigatório"]
  }
}
```

### ❌ **Erro do servidor (500)**
```json
{
  "success": false,
  "message": "Erro interno do servidor"
}
```

---

## 🎨 **Template de Email**

O cliente recebe automaticamente um email profissional com:

- ✅ **Visual da marca** Rocha Branca
- ✅ **Confirmação** do email cadastrado
- ✅ **Próximos passos** claros
- ✅ **Informações de contato** da empresa
- ✅ **Design responsivo** e profissional

---

## 🧪 **Exemplo de uso no React**

```javascript
const cadastrarLead = async (email) => {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/lead', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify({ email })
    });
    
    const result = await response.json();
    
    if (response.ok) {
      console.log('Lead cadastrado:', result);
      // Mostrar mensagem de sucesso
      alert(result.message);
    } else {
      console.error('Erro:', result);
      // Mostrar erros de validação
    }
  } catch (error) {
    console.error('Erro de conexão:', error);
  }
};

// Uso:
cadastrarLead('cliente@exemplo.com');
```

---

## 💡 **Casos de uso**

### 1. **Newsletter simples**
```html
<form onSubmit={handleNewsletter}>
  <input type="email" placeholder="Seu email" />
  <button>Cadastrar</button>
</form>
```

### 2. **Pop-up de interesse**
```html
<div class="popup">
  <h3>Quer saber mais?</h3>
  <input type="email" placeholder="Digite seu email" />
  <button>Quero receber contato</button>
</div>
```

### 3. **Rodapé do site**
```html
<footer>
  <div class="newsletter">
    <h4>Fique por dentro!</h4>
    <input type="email" placeholder="email@exemplo.com" />
    <button>Enviar</button>
  </div>
</footer>
```

---

## 🗃️ **Banco de Dados**

### **Tabela: leads**
- `id` - Auto incremento
- `email` - Email único do lead
- `created_at` - Data/hora do cadastro
- `updated_at` - Última atualização

### **Ver leads cadastrados:**
```bash
sqlite3 database/database.sqlite "SELECT * FROM leads ORDER BY created_at DESC;"
```

---

## ⚡ **Funcionalidades**

- ✅ **Validação robusta** de email
- ✅ **Prevenção de duplicatas**
- ✅ **Email automático** profissional  
- ✅ **Resposta rápida** em JSON
- ✅ **Logs de erro** para debug
- ✅ **CORS configurado** para React
- ✅ **Integração simples**

---

## 🎯 **Diferença entre `/contact` e `/lead`**

| Recurso | `/api/contact` | `/api/lead` |
|---------|----------------|-------------|
| **Campos** | Nome, sobrenome, telefone, email, mensagem, termos | Apenas email |
| **Objetivo** | Contato completo com detalhes | Captação rápida de interesse |
| **Email enviado** | Notificação + confirmação detalhada | Agradecimento simples |
| **Uso** | Formulário de contato principal | Newsletter, pop-ups, captação |

---

**Agora você tem duas APIs poderosas para diferentes necessidades de captação!** 🚀