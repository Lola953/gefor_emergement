Voilà la version refaite dans le style GEFOR :

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Formateurs</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #1a1f3c;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            padding: 30px 20px;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 900px;
            margin: 0 auto 40px auto;
        }
        .logo-mini {
            display: flex;
            align-items: center;
            font-family: Georgia, serif;
            text-decoration: none;
        }
        .logo-mini .g {
            font-size: 1.8em;
            font-weight: bold;
            color: white;
            line-height: 1;
        }
        .logo-mini .txt {
            display: flex;
            flex-direction: column;
            margin-left: 2px;
        }
        .logo-mini .roupe {
            font-size: 0.5em;
            letter-spacing: 2px;
            color: white;
        }
        .logo-mini .efor {
            font-size: 0.85em;
            color: #c0392b;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .retour {
            color: #aaa;
            text-decoration: none;
            font-size: 0.9em;
            border: 1px solid #3a4170;
            padding: 7px 16px;
            border-radius: 20px;
            transition: border-color 0.2s;
        }
        .retour:hover { border-color: #c0392b; color: white; }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        .page-header {
            margin-bottom: 35px;
        }
        .page-header h1 {
            font-size: 1.8em;
            font-weight: normal;
            margin-bottom: 6px;
        }
        .page-header p {
            color: #aaa;
            font-size: 0.9em;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 14px;
        }
        .card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 14px;
            padding: 25px 22px;
            text-decoration: none;
            color: white;
            transition: border-color 0.2s, transform 0.15s;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .card:hover {
            border-color: #c0392b;
            transform: translateY(-2px);
        }
        .card-icon { font-size: 1.8em; flex-shrink: 0; }
        .card-text h3 { font-size: 0.95em; margin-bottom: 4px; }
        .card-text p { color: #aaa; font-size: 0.78em; }
    </style>
</head>
<body>

    <div class="topbar">
        <a href="/accueil" class="logo-mini">
            <span class="g">G</span>
            <div class="txt">
                <span class="roupe">ROUPE</span>
                <span class="efor">EFOR</span>
            </div>
        </a>
        <a href="/accueil" class="retour">← Retour à l'accueil</a>
    </div>

    <div class="container">

        <div class="page-header">
            <h1>Espace Formateurs</h1>
            <p>Gérez les présences et suivez l'assiduité de vos apprenants</p>
        </div>

        <div class="grid">
            <a href="#" class="card">
                <span class="card-icon">❌</span>
                <div class="card-text">
                    <h3>Gestion des absences</h3>
                    <p>Consulter et gérer les absences</p>
                </div>
            </a>
            <a href="#" class="card">
                <span class="card-icon">✅</span>
                <div class="card-text">
                    <h3>Validation des présences</h3>
                    <p>Valider les émargements du jour</p>
                </div>
            </a>
            <a href="#" class="card">
                <span class="card-icon">⏰</span>
                <div class="card-text">
                    <h3>Gestion des retards</h3>
                    <p>Suivre et signaler les retards</p>
                </div>
            </a>
            <a href="{{ route('emargement.index') }}" class="card">
                <span class="card-icon">✍️</span>
                <div class="card-text">
                    <h3>Voir les émargements</h3>
                    <p>Liste complète des signatures</p>
                </div>
            </a>
        </div>

    </div>

</body>
</html>
```

Ctrl+A dans `formateurs.blade.php`, supprime tout, colle ça, **Ctrl+S** ! 😊