<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle inscription à une offre</title>
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
        <h1>Nouvelle inscription à une offre</h1>
    </div>
    
    <div class="content">
        <p>Bonjour,</p>
        
        <p>Une nouvelle inscription a été enregistrée pour une offre de formation.</p>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #113c66;">Informations de l'offre</h3>
            @if($subscription->offre->title)
            <p><span class="label">Titre:</span> <span class="value">{{ $subscription->offre->title }}</span></p>
            @endif
            @if($subscription->offre->intitule)
            <p><span class="label">Intitulé:</span> <span class="value">{{ $subscription->offre->intitule }}</span></p>
            @endif
        </div>
        
        <div class="info-box">
            <h3 style="margin-top: 0; color: #113c66;">Informations du candidat</h3>
            <p><span class="label">Nom:</span> <span class="value">{{ $subscription->name }}</span></p>
            <p><span class="label">Téléphone:</span> <span class="value">{{ $subscription->phone }}</span></p>
            @if($subscription->note)
            <p><span class="label">Note:</span> <span class="value">{{ $subscription->note }}</span></p>
            @endif
            <p><span class="label">Date d'inscription:</span> <span class="value">{{ $subscription->created_at->format('d/m/Y à H:i') }}</span></p>
        </div>
        
        <p style="margin-top: 20px;">
            <strong>Action requise:</strong> Veuillez contacter le candidat pour confirmer son inscription.
        </p>
    </div>
    
    <div class="footer">
        <p>Cet email a été envoyé automatiquement par le système SLS Formation et Conseils.</p>
        <p>Ne pas répondre à cet email.</p>
    </div>
</body>
</html>

