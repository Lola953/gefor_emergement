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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        .logo-wrapper {
            background-color: #252b4a;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px auto;
            overflow: hidden;
        }
        .logo-inner {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-g {
            font-size: 4em;
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
            font-size: 0.65em;
            color: white;
            font-family: Georgia, serif;
            letter-spacing: 3px;
        }
        .logo-efor {
            font-size: 1.2em;
            color: #c0392b;
            font-family: Georgia, serif;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .intro {
            text-align: center;
            margin-bottom: 50px;
        }
        .intro h1 {
            font-size: 2em;
            font-weight: normal;
            margin-bottom: 10px;
        }
        .intro p {
            color: #aaa;
            font-size: 0.95em;
            max-width: 500px;
            line-height: 1.6;
        }
        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 900px;
        }
        .card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 18px;
            padding: 35px 30px;
            width: 240px;
            text-align: center;
            text-decoration: none;
            color: white;
            transition: border-color 0.2s, transform 0.15s;
        }
        .card:hover {
            border-color: #c0392b;
            transform: translateY(-3px);
        }
        .card-icon {
            font-size: 2.2em;
            margin-bottom: 15px;
        }
        .card h2 {
            font-size: 1em;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .card p {
            color: #aaa;
            font-size: 0.82em;
            line-height: 1.4;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="logo-wrapper">
        <div class="logo-inner">
            <span class="logo-g">G</span>
            <div class="logo-right">
                <span class="logo-roupe">ROUPE</span>
                <span class="logo-efor">EFOR</span>
            </div>
        </div>
    </div>

    <div class="intro">
        <h1>Bienvenue chez GEFOR</h1>
        <p>L'émargement numérique qui simplifie votre formation. Signez votre présence en un clic, envoyez vos justificatifs depuis votre mobile.</p>
    </div>

    <div class="cards">
        <a href="/apprenants" class="card">
            <div class="card-icon">🎓</div>
            <h2>Apprenants</h2>
            <p>Consulter votre planning et signer vos émargements</p>
        </a>
        <a href="/formateurs" class="card">
            <div class="card-icon">👨‍🏫</div>
            <h2>Formateurs</h2>
            <p>Gérer les présences et valider les émargements</p>
        </a>
        <a href="/administration" class="card">
            <div class="card-icon">🏢</div>
            <h2>Administration</h2>
            <p>Tableau de bord et suivi des formations</p>
        </a>
    </div>

</body>
</html>