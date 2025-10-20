<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - Rocha Branca</title>
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
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }
        .info-item {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            flex: 1;
            min-width: 200px;
        }
        .info-label {
            font-weight: bold;
            color: #495057;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .info-value {
            color: #212529;
            font-size: 16px;
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
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
        .timestamp {
            color: #6c757d;
            font-size: 14px;
            font-style: italic;
        }
        @media (max-width: 600px) {
            .contact-info {
                flex-direction: column;
            }
            .info-item {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Rocha Branca" style="max-width: 200px; height: auto; margin-bottom: 15px;">
            <h1>🎉 Novo Contato Recebido!</h1>
        </div>
        
        <div class="content">
            <div class="info-box">
                <h3 style="margin-top: 0; color: #337AB7;">📋 Dados do Contato</h3>
                
                <div class="contact-info">
                    <div class="info-item">
                        <div class="info-label">Nome Completo</div>
                        <div class="info-value">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ $contact['email'] }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Telefone</div>
                        <div class="info-value">{{ $contact['phone'] }}</div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-label">Termos Aceitos</div>
                        <div class="info-value">
                            @if($contact['terms_accepted'])
                                ✅ Sim
                            @else
                                ❌ Não
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Rocha Branca" style="max-width: 120px; height: auto; margin-bottom: 10px; opacity: 0.7;">
        </div>
    </div>
</body>
</html>