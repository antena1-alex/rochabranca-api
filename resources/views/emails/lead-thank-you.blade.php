<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo seu interesse - Rocha Branca</title>
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
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 20px;
        }
        .footer-section h4 {
            color: white;
            font-weight: bold;
            margin: 0 0 15px 0;
            font-size: 16px;
        }
        .contact-item {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 10px;
            color: #9ca3af;
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
            .info-row {
                flex-direction: column;
                gap: 5px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
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
                
                <div class="footer-grid">
                    <div class="footer-section">
                        <div class="contact-item">
                            <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <a style="color: #f4f4f4; text-decoration: none;" href="https://www.google.com/maps/search/?api=1&query=Fonte+Rocha+Branca+Estrada+para+Votorantim+1962+Parque+Esplanada+do+Embu+Embu+das+Artes+SP+06844-310" target="_blank">Estrada para Votorantim, 1962<br>Vila Maria Auxiliadora<br>Embu das Artes - SP</a>
                        </div>
                    </div>
                    
                    <div class="footer-section">
                        <div class="contact-item">
                            <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                            <a href="mailto:atendimento@aguarochabranca.com.br" style="color: #f4f4f4; text-decoration: none;">atendimento@aguarochabranca.com.br</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
                            <a href="https://wa.me/5511957773366" style="color: #f4f4f4; text-decoration: none;" target="_blank">+55 11 95777-3366</a>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <a href="https://www.facebook.com/fonterochabranca/" class="social-link" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/_rochabranca" class="social-link" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/rochabrancaoficial/" class="social-link" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
                
                <div class="footer-description">
                     © {{ now()->format('Y') }} Rocha Branca. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </div>
</body>
</html>