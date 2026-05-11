<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les Formateurs</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #1a1f3c;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            padding: 40px;
        }
        h1 { font-size: 2.5em; margin-bottom: 40px; text-align: center; }
        .grille {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        .carte {
            background-color: #2c3460;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            text-decoration: none;
            color: white;
            font-size: 0.95em;
        }
        .carte:hover { background-color: #3a4480; }
        .retour {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #aaa;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h1>Les Formateurs</h1>

    <div class="grille">
        <a href="#" class="carte">Gestion des absences</a>
        <a href="#" class="carte">Validation présence</a>
        <a href="#" class="carte">Gestion des retards</a>
    </div>

    <a href="/" class="retour">← Retour à l'accueil</a>

</body>
</html>