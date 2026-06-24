<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEFOR - Application mobile</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #1a1f3c;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
        }
        .logo-wrapper {
            background-color: #1a1f3c;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px auto;
            overflow: hidden;
        }
        .logo-inner {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-g {
            font-size: 3em;
            color: white;
            font-family: Georgia, serif;
            font-weight: bold;
            line-height: 1;
        }
        .logo-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 2px;
        }
        .logo-roupe {
            font-size: 0.6em;
            color: white;
            font-family: Georgia, serif;
            letter-spacing: 3px;
        }
        .logo-efor {
            font-size: 1em;
            color: #c0392b;
            font-family: Georgia, serif;
            font-weight: bold;
            letter-spacing: 1px;
        }
        h1 {
            font-size: 1.6em;
            font-weight: normal;
            margin-bottom: 12px;
        }
        p {
            color: #aaa;
            font-size: 0.9em;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            background-color: #c0392b;
            color: white;
            padding: 14px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.2s;
            margin-bottom: 20px;
        }
        .btn:hover { background-color: #a93226; }
        .back {
            display: block;
            color: #aaa;
            text-decoration: none;
            font-size: 0.85em;
            transition: color 0.2s;
        }
        .back:hover { color: white; }
    </style>
</head>
<body>
    <div class="card">

        <div class="logo-wrapper">
            <div class="logo-inner">
                <span class="logo-g">G</span>
                <div class="logo-right">
                    <span class="logo-roupe">ROUPE</span>
                    <span class="logo-efor">EFOR</span>
                </div>
            </div>
        </div>

        <h1>Application mobile GEFOR</h1>
        <p>Téléchargez l'application Android pour signer vos émargements, consulter votre planning et envoyer vos justificatifs depuis votre smartphone.</p>

        <a href="{{ asset('app-release.apk') }}" download class="btn">
            📱 Télécharger l'APK
        </a>

        <a href="/" class="back">← Retour à la page de connexion</a>

    </div>
</body>
</html>