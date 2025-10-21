<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo seu interesse - Rocha Branca</title>
    <style>
        body { 
            margin: 0; 
            padding: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.6; 
            background-color: #f4f4f4; 
        }
        .container { 
            max-width: 600px; 
            margin: 20px auto; 
            background: white; 
            border-radius: 10px; 
            overflow: hidden; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
        }
        .header { 
            background: linear-gradient(135deg, #2563eb, #1d4ed8); 
            padding: 30px; 
            text-align: center; 
        }
        .logo { 
            color: white; 
            font-size: 24px; 
            font-weight: bold; 
            margin-bottom: 10px; 
        }
        .header-subtitle { 
            color: #e0e7ff; 
            font-size: 16px; 
        }
        .content { 
            padding: 30px; 
        }
        .greeting { 
            font-size: 18px; 
            color: #2563eb; 
            margin-bottom: 20px; 
            font-weight: 600; 
        }
        .message { 
            color: #4b5563; 
            font-size: 16px; 
            margin-bottom: 25px; 
        }
        .highlight-box { 
            background: #f0f9ff; 
            border-left: 4px solid #2563eb; 
            padding: 20px; 
            margin: 25px 0; 
            border-radius: 4px; 
        }
        .highlight-text { 
            color: #1e40af; 
            font-weight: 600; 
            margin: 0; 
        }
        .contact-info { 
            background: #f9fafb; 
            padding: 20px; 
            border-radius: 8px; 
            margin: 25px 0; 
        }
        .contact-title { 
            color: #2563eb; 
            font-weight: 600; 
            margin-bottom: 15px; 
        }
        .contact-item { 
            color: #4b5563; 
            margin-bottom: 8px; 
        }
        .footer { 
            background: #1f2937; 
            color: #9ca3af; 
            padding: 20px; 
            text-align: center; 
            font-size: 14px; 
        }
        .footer-logo { 
            color: #2563eb; 
            font-weight: bold; 
            margin-bottom: 10px; 
        }
        .email-info { 
            background: #eff6ff; 
            padding: 15px; 
            border-radius: 6px; 
            margin: 20px 0; 
            text-align: center; 
        }
        .email-label { 
            color: #2563eb; 
            font-weight: 600; 
            font-size: 14px; 
        }
        .email-value { 
            color: #1e40af; 
            font-weight: 500; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"> ROCHA BRANCA</div>
            <div class="header-subtitle">Obrigado pelo seu interesse!</div>
        </div>
        
        <div class="content">
            <div class="greeting">Olá! 👋</div>
            
            <div class="message">
                Recebemos seu email e ficamos muito felizes com seu interesse em nossos serviços!
            </div>

            <div class="email-info">
                <div class="email-label">SEU EMAIL CADASTRADO:</div>
                <div class="email-value">{{ $lead->email }}</div>
            </div>
            
            <div class="highlight-box">
                <p class="highlight-text">
                    ✅ Seu email foi registrado com sucesso!<br>
                    ⏱️ Nossa equipe entrará em contato em breve.<br>
                    📧 Você receberá mais informações sobre nossos serviços.
                </p>
            </div>
            
            <div class="message">
                Enquanto isso, você pode conhecer mais sobre a Rocha Branca e os serviços que oferecemos.
            </div>
            
            <div class="contact-info">
                <div class="contact-title">📞 Nossos Contatos</div>
                <div class="contact-item">📧 Email: contato@rochabranca.com.br</div>
                <div class="contact-item">📱 WhatsApp: (11) 99999-9999</div>
                <div class="contact-item">🌐 Site: www.aguarochabranca.com.br</div>
            </div>
            
            <div class="message">
                Atenciosamente,<br>
                <strong>Equipe Rocha Branca</strong>
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-logo">ROCHA BRANCA</div>
            <div>Este é um email automático. Se você não solicitou este contato, pode ignorar esta mensagem.</div>
        </div>
    </div>
</body>
</html>