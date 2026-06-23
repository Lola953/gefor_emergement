<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Administration</title>
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

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin-bottom: 35px;
        }
        .stat-card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
        }
        .stat-number {
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 6px;
        }
        .stat-label {
            color: #aaa;
            font-size: 0.8em;
        }
        .stat-card.vert .stat-number { color: #2ecc71; }
        .stat-card.rouge .stat-number { color: #c0392b; }
        .stat-card.jaune .stat-number { color: #f39c12; }
        .stat-card.bleu .stat-number { color: #3498db; }

        h2 {
            font-size: 1.1em;
            font-weight: normal;
            color: #ddd;
            margin-bottom: 16px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 14px;
            margin-bottom: 35px;
        }
        .card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 14px;
            padding: 22px;
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
        .card-icon {
            font-size: 1.8em;
            flex-shrink: 0;
        }
        .card-text h3 {
            font-size: 0.95em;
            margin-bottom: 4px;
        }
        .card-text p {
            color: #aaa;
            font-size: 0.78em;
        }
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
            <h1>Administration</h1>
            <p>Tableau de bord — gestion des émargements et des formations</p>
        </div>

        <div class="stats">
            <div class="stat-card vert">
                <div class="stat-number">87%</div>
                <div class="stat-label">Taux de présence</div>
            </div>
            <div class="stat-card rouge">
                <div class="stat-number">5</div>
                <div class="stat-label">Absences aujourd'hui</div>
            </div>
            <div class="stat-card jaune">
                <div class="stat-number">3</div>
                <div class="stat-label">Justificatifs en attente</div>
            </div>
            <div class="stat-card bleu">
                <div class="stat-number">12</div>
                <div class="stat-label">Cours aujourd'hui</div>
            </div>
        </div>

        <h2>Gestion</h2>
        <div class="grid">
            <a href="#" class="card">
                <span class="card-icon">📁</span>
                <div class="card-text">
                    <h3>Conservation des documents</h3>
                    <p>Archives et exports PDF</p>
                </div>
            </a>
            <a href="#" class="card">
                <span class="card-icon">📊</span>
                <div class="card-text">
                    <h3>Reporting et alertes</h3>
                    <p>Statistiques d'assiduité</p>
                </div>
            </a>
            <a href="#" class="card">
                <span class="card-icon">📋</span>
                <div class="card-text">
                    <h3>Justificatifs apprenants</h3>
                    <p>Validation et suivi</p>
                </div>
            </a>
            <a href="#" class="card">
                <span class="card-icon">✅</span>
                <div class="card-text">
                    <h3>Présences et retards</h3>
                    <p>Vérification des émargements</p>
                </div>
            </a>
        </div>

        <h2>Émargements récents</h2>
        <div class="grid">
            <a href="{{ route('emargement.index') }}" class="card">
                <span class="card-icon">✍️</span>
                <div class="card-text">
                    <h3>Voir tous les émargements</h3>
                    <p>Liste complète des signatures</p>
                </div>
            </a>
        </div>

    </div>

</body>
</html>