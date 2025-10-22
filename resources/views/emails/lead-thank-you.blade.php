<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo seu contato - Rocha Branca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            background: #08064E; 
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
            font-size: 24px; 
        }
        .button {
            display: inline-block;
            background: #08064E;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            font-weight: bold;
            text-align: center;
        }
        .content { 
            padding: 30px; 
        }
        .greeting { 
            font-size: 18px; 
            color: #08064E; 
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
            border-left: 4px solid #08064E; 
            padding: 20px; 
            margin: 25px 0; 
            border-radius: 4px; 
        }
        .highlight-text { 
            color: #08064E; 
            font-weight: 600; 
            margin: 0; 
        }
        .contact-info { 
            border-left: #08064E 4px solid;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .contact-title { 
            color: #08064E; 
            font-weight: 600; 
            margin-bottom: 15px; 
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-row {
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-row td {
            padding: 10px 0;
            vertical-align: top;
        }
        .info-label {
            font-weight: bold;
            color: #495057;
        }
        .info-value {
            color: #212529;
        }
        .email-info {
            background-color: #f8f9fa;
            border-left: 4px solid #08064E;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: center;
        }
        .email-label {
            font-size: 12px;
            font-weight: bold;
            color: #495057;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .email-value {
            font-size: 18px;
            font-weight: 600;
            color: #08064E;
        }
        .footer {
            background: #101828;
            color: #9ca3af;
            padding: 30px 20px;
            font-size: 14px;
        }
        .footer-content {
            max-width: 560px;
            margin: 0 auto;
        }
        .footer-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .footer-table td {
            width: 50%;
            padding: 0 15px;
            vertical-align: top;
        }
        .footer-section h4 {
            color: white;
            font-weight: bold;
            margin: 0 0 15px 0;
            font-size: 16px;
        }
        .contact-item {
            margin-bottom: 10px;
            color: #9ca3af;
            display: block;
        }
        .contact-icon {
            color: #EF1A9A;
            margin-right: 8px;
            margin-top: 2px;
            font-size: 14px;
        }
        .social-links {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin: 20px 0;
        }
        .social-link {
            display: inline-block;
            width: 36px;
            height: 36px;
            background: #EF1A9A;
            color: white;
            text-align: center;
            line-height: 36px;
            border-radius: 50%;
            text-decoration: none;
            font-size: 16px;
        }
        .social-link:hover {
            background: #A50F5D;
        }
        .footer-description {
            text-align: center;
            color: #6b7280;
            font-size: 12px;
            border-top: 1px solid #374151;
            padding-top: 20px;
        }
        @media (max-width: 600px) {
            .footer-table td {
                display: block;
                width: 100% !important;
                padding: 10px 0;
            }
            .info-table td {
                display: block;
                width: 100% !important;
            }
            .info-label {
                display: block;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Logo Rocha Branca" style="max-width: 200px; height: auto; margin-bottom: 15px;">
            <div class="header-subtitle">Obrigado pelo seu contato!</div>
        </div>
        
        <div class="content">
            <div class="greeting">Olá!</div>
            
            <div class="message">
                Recebemos seu email e ficamos muito felizes com seu interesse em nossos serviços!
            </div>

            <div class="email-info">
                <div class="email-label">SEU EMAIL CADASTRADO:</div>
                <div class="email-value">{{ $lead->email }}</div>
            </div>
            
            <div class="highlight-box">
                <p class="highlight-text">
                    Seu email foi registrado com sucesso!<br>
                    Nossa equipe entrará em contato em breve.<br>
                    Você receberá mais informações sobre nossos serviços.
                </p>
            </div>
            
            <div class="message">
                Enquanto isso, você pode conhecer mais sobre a Rocha Branca e os serviços que oferecemos.
            </div>
            
            <div class="contact-info">
                <div class="contact-title">Nossos Contatos</div>
                
                <table class="info-table">
                    <tr class="info-row">
                        <td><span class="info-label">Email:</span></td>
                        <td><span class="info-value">atendimento@aguarochabranca.com.br</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">WhatsApp:</span></td>
                        <td><span class="info-value">(11) 95777-3366</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">Localização:</span></td>
                        <td><span class="info-value">Estrada para Votorantim, 1962 - Embu das Artes/SP</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">Site:</span></td>
                        <td><span class="info-value">www.aguarochabranca.com.br</span></td>
                    </tr>
                </table>
            </div>
            
            <div class="message">
                Atenciosamente,<br>
                <strong>Equipe Rocha Branca</strong>
            </div>

            <div style="text-align: center;">
                <a href="https://aguarochabranca.com.br" class="button" target="_blank">
                    Visite nosso site
                </a>
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Rocha Branca" style="max-width: 200px; height: auto;">
                </div>
                
                <table class="footer-table">
                    <tr>
                        <td class="footer-section">
                            <div class="contact-item">
                                <span class="contact-icon">📍</span>
                                <a href="https://www.google.com/maps/search/?api=1&query=Fonte+Rocha+Branca+Estrada+para+Votorantim+1962+Parque+Esplanada+do+Embu+Embu+das+Artes+SP+06844-310" target="_blank" style="color: #9ca3af; text-decoration: none; margin-left: 8px;">Estrada para Votorantim, 1962<br>Vila Maria Auxiliadora<br>Embu das Artes - SP</a>
                            </div>
                        </td>
                        
                        <td class="footer-section">
                            <div class="contact-item">
                                <span class="contact-icon">📧</span>
                                <a href="mailto:atendimento@aguarochabranca.com.br" style="color: #9ca3af; text-decoration: none; margin-left: 8px;">atendimento@aguarochabranca.com.br</a>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">📱</span>
                                <a href="https://wa.me/5511957773366" style="color: #9ca3af; text-decoration: none; margin-left: 8px;">+55 11 95777-3366</a>
                            </div>
                        </td>
                    </tr>
                </table>
                
                <div class="footer-description">
                     © {{ now()->format('Y') }} Rocha Branca. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </div>
</body>
</html>