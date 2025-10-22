<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Contato - Rocha Branca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            background: #08064E;
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
            border-left: #08064E 4px solid;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
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
        .timeline {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
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
            <h1>Contato Confirmado!</h1>
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
                <h4 style="margin-top: 0; color: #08064E;">Resumo dos seus dados:</h4>
                
                <table class="info-table">
                    <tr class="info-row">
                        <td><span class="info-label">Nome completo:</span></td>
                        <td><span class="info-value">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">Email:</span></td>
                        <td><span class="info-value">{{ $contact['email'] }}</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">Telefone:</span></td>
                        <td><span class="info-value">{{ $contact['phone'] }}</span></td>
                    </tr>
                    
                    <tr class="info-row">
                        <td><span class="info-label">Data do contato:</span></td>
                        <td><span class="info-value">{{ now()->format('d/m/Y \à\s H:i:s') }}</span></td>
                    </tr>
                </table>
            </div>
            
            @if(!empty($contact['message']))
            <div class="info-summary" style="margin-top: 20px;">
                <h4 style="margin-top: 0; color: #08064E;">Sua mensagem:</h4>
                <div style="background-color: #e9ecef; padding: 15px; border-radius: 8px; font-style: italic; line-height: 1.6;">
                    "{{ $contact['message'] }}"
                </div>
            </div>
            @endif
            
            <div class="timeline">
                <h4 style="margin-top: 0; color: #856404;">Próximos passos:</h4>
                <ul style="margin-bottom: 0; color: #856404;">
                    <li><strong>Análise:</strong> Nossa equipe analisará sua solicitação</li>
                    <li><strong>Contato:</strong> Retorno em até 24-48 horas</li>
                    <li><strong>Atendimento:</strong> Resposta personalizada para suas necessidades</li>
                </ul>
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