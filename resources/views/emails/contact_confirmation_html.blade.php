<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Contato - Rocha Branca</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #337AB7 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }
        .content {
            padding: 30px;
        }
        .welcome-box {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        .info-summary {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            color: #495057;
        }
        .info-value {
            color: #212529;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #337AB7 100%);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            font-weight: bold;
            text-align: center;
        }
        .timeline {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
        @media (max-width: 600px) {
            .info-row {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Rocha Branca" style="max-width: 200px; height: auto; margin-bottom: 15px;">
            <h1>✅ Contato Confirmado!</h1>
            <p>Olá, {{ $contact['first_name'] }}!</p>
        </div>
        
        <div class="content">
            <div class="welcome-box">
                <h3 style="margin-top: 0; color: #155724;">🎉 Recebemos seu contato com sucesso!</h3>
                <p style="margin-bottom: 0; color: #155724;">
                    Nossa equipe analisará sua solicitação e retornará o contato o mais breve possível.
                </p>
            </div>
            
            <div class="info-summary">
                <h4 style="margin-top: 0; color: #337AB7;">📋 Resumo dos seus dados:</h4>
                
                <div class="info-row">
                    <span class="info-label">Nome completo:</span>
                    <span class="info-value">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value">{{ $contact['email'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Telefone:</span>
                    <span class="info-value">{{ $contact['phone'] }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Data do contato:</span>
                    <span class="info-value">{{ now()->format('d/m/Y \à\s H:i:s') }}</span>
                </div>
            </div>
            
            <div class="timeline">
                <h4 style="margin-top: 0; color: #856404;">⏱️ Próximos passos:</h4>
                <ul style="margin-bottom: 0; color: #856404;">
                    <li><strong>Análise:</strong> Nossa equipe analisará sua solicitação</li>
                    <li><strong>Contato:</strong> Retorno em até 24-48 horas</li>
                    <li><strong>Atendimento:</strong> Resposta personalizada para suas necessidades</li>
                </ul>
            </div>
            
            <div style="text-align: center;">
                <a href="https://aguarochabranca.com.br" class="button">
                    🌐 Visitar nosso site
                </a>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <p style="color: #6c757d; font-size: 14px;">
                    <strong>Dúvidas?</strong> Responda este email ou entre em contato conosco.
                </p>
            </div>
        </div>
        
        <div class="footer">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Rocha Branca" style="max-width: 120px; height: auto; margin-bottom: 10px; opacity: 0.7;">
        </div>
    </div>
</body>
</html>