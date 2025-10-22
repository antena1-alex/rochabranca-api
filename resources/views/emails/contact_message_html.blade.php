<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - Rocha Branca</title>
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
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #08064E;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .contact-info {
            margin: 20px 0;
        }
        .contact-table {
            width: 100%;
            border-collapse: collapse;
        }
        .contact-table td {
            width: 50%;
            padding: 7px;
            vertical-align: top;
        }
        .info-item {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            width: 100%;
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
            background: #08064E;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            font-weight: bold;
            text-align: center;
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
            .contact-table td {
                display: block;
                width: 100% !important;
                padding: 7px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://a1media.antena1.com.br/rb/logo/logo-rocha-branca-header.svg" alt="Logo Rocha Branca" style="max-width: 200px; height: auto; margin-bottom: 15px;">
            <h1>Novo Contato Recebido!</h1>
        </div>
        
        <div class="content">
            <div class="info-box">
                <h3 style="margin-top: 0; color: #08064E;">Dados do Contato</h3>
                
                <div class="contact-info">
                    <table class="contact-table">
                        <tr>
                            <td>
                                <div class="info-item">
                                    <div class="info-label">Nome Completo</div>
                                    <div class="info-value">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</div>
                                </div>
                            </td>
                            <td>
                                <div class="info-item">
                                    <div class="info-label">Email</div>
                                    <div class="info-value">{{ $contact['email'] }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="info-item">
                                    <div class="info-label">Telefone</div>
                                    <div class="info-value">{{ $contact['phone'] }}</div>
                                </div>
                            </td>
                            <td>
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
                            </td>
                        </tr>
                    </table>
                </div>
                
                @if(!empty($contact['message']))
                <div class="info-box" style="margin-top: 20px;">
                    <h3 style="margin-top: 0; color: #08064E;">Mensagem do Cliente</h3>
                    <div style="background-color: #e9ecef; padding: 15px; border-radius: 8px; font-style: italic; line-height: 1.6;">
                        "{{ $contact['message'] }}"
                    </div>
                </div>
                @endif
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