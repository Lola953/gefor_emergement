<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Télécharger l'application GEFOR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #1a1a2e;
            color: white;
        }
        .container {
            text-align: center;
            padding: 40px;
            background-color: #16213e;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        h1 { color: #e94560; }
        p { margin: 20px 0; }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #e94560;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }
        .btn:hover { background-color: #c73652; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Application GEFOR</h1>
        <p>Téléchargez l'application mobile GEFOR pour Android</p>
        <a href="{{ asset('app-release.apk') }}" download class="btn">
            📱 Télécharger l'APK
        </a>
    </div>
</body>
</html>