<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Accueil</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #1a1f3c;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            padding: 40px;
        }
        h1 { font-size: 3em; margin-bottom: 10px; }
        .logo span { color: #c0392b; }
        p { color: #aaa; margin-bottom: 30px; max-width: 500px; }
        .boutons { display: flex; gap: 15px; margin-top: 30px; }
        .btn {
            background-color: #c0392b;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9em;
        }
        .btn:hover { background-color: #a93226; }
    </style>
</head>
<body>
    

    <h1 class="logo"><span>G</span>EFOR</h1>
    <br>
    <p>Bienvenue chez GEFOR</p>
    <p>L'émargement numérique qui simplifie votre formation. Signez votre présence en un clic, envoyez vos justificatifs depuis votre mobile.</p>

    <div class="boutons">
        <a href="/apprenants" class="btn">Pour les Apprenants</a>
        <a href="/formateurs" class="btn">Pour les Formateurs</a>
        <a href="/administration" class="btn">Pour l'Administration</a>
    </div>

</body>
</html>
