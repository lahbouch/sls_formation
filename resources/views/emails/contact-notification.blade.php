<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #113c66;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
        }
        .info-box {
            background-color: white;
            padding: 15px;
            margin: 15px 0;
            border-left: 4px solid #113c66;
            border-radius: 4px;
        }
        .label {
            font-weight: bold;
            color: #113c66;
            display: inline-block;
            min-width: 120px;
        }
        .value {
            color: #333;
        }
        .message-box {
            background-color: white;
            padding: 15px;
            margin: 15px 0;
            border-left: 4px solid #113c66;
            border-radius: 4px;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class="content">
        <p>Bonjour,</p>
        
        <p>Vous avez reçu un nouveau message via le formulaire de contact de votre site web.</p>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #113c66;">Informations du contact</h3>
            <p><span class="label">Nom et prénom:</span> <span class="value">{{ $contact->full_name }}</span></p>
            <p><span class="label">Email:</span> <span class="value">{{ $contact->email }}</span></p>
            @if($contact->telephone)
            <p><span class="label">Téléphone:</span> <span class="value">{{ $contact->telephone }}</span></p>
            @endif
            <p><span class="label">Sujet:</span> <span class="value">{{ $contact->sujet }}</span></p>
            <p><span class="label">Date:</span> <span class="value">{{ $contact->created_at->format('d/m/Y à H:i') }}</span></p>
        </div>
        
        <div class="message-box">
            <h3 style="margin-top: 0; color: #113c66;">Message:</h3>
            <p style="margin: 0;">{{ $contact->message }}</p>
        </div>
        
        <p style="margin-top: 20px;">
            <strong>Action requise:</strong> Veuillez répondre à ce message dans les plus brefs délais.
        </p>
    </div>
    
    <div class="footer">
        <p>Cet email a été envoyé automatiquement par le système SLS Formation et Conseils.</p>
        <p>Ne pas répondre à cet email. Pour répondre, utilisez l'adresse email du contact: <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
    </div>
</body>
</html>

