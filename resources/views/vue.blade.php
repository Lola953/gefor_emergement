<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEFOR - Bienvenue</title>
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
            max-width: 800px;
            margin: 0 auto 40px auto;
        }
        .logo-mini {
            display: flex;
            align-items: center;
            font-family: Georgia, serif;
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
        }
        .logo-mini .efor {
            font-size: 0.85em;
            color: #c0392b;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .user-info span { color: #aaa; font-size: 0.9em; }
        .logout-btn {
            color: #c0392b;
            text-decoration: none;
            font-size: 0.9em;
            border: 1px solid #c0392b;
            padding: 7px 16px;
            border-radius: 20px;
            transition: background-color 0.2s;
        }
        .logout-btn:hover { background-color: #c0392b22; }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .intro {
            text-align: center;
            margin-bottom: 45px;
        }
        .intro h1 {
            font-size: 2em;
            margin-bottom: 10px;
            font-weight: normal;
        }
        .intro p {
            color: #aaa;
            font-size: 0.95em;
        }

        h2 {
            font-size: 1.2em;
            font-weight: normal;
            margin-bottom: 18px;
            color: #ddd;
        }

        .cours-list {
            list-style: none;
            margin-bottom: 45px;
        }
        .cours-item {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 14px;
            padding: 18px 22px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: border-color 0.2s;
        }
        .cours-item:hover { border-color: #c0392b; }
        .cours-nom { font-size: 1em; font-weight: bold; margin-bottom: 4px; }
        .cours-details { color: #aaa; font-size: 0.85em; }
        .cours-badge {
            background-color: #c0392b22;
            color: #e85f4c;
            font-size: 0.75em;
            padding: 5px 12px;
            border-radius: 12px;
            white-space: nowrap;
        }

        .empty-msg {
            text-align: center;
            color: #777;
            padding: 30px 0;
            background-color: #252b4a;
            border-radius: 14px;
            margin-bottom: 45px;
        }

        .section-divider {
            border-top: 1px solid #3a4170;
            padding-top: 35px;
        }

        .access-card {
            background-color: #252b4a;
            border: 1px solid #3a4170;
            border-radius: 18px;
            padding: 35px 30px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s, transform 0.15s;
        }
        .access-card:hover {
            border-color: #c0392b;
            transform: translateY(-2px);
        }
        .access-card h3 {
            font-size: 1.3em;
            margin-bottom: 8px;
            font-weight: normal;
        }
        .access-card p {
            color: #aaa;
            font-size: 0.9em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #c0392b;
            color: white;
            padding: 12px 28px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9em;
            transition: background-color 0.2s;
        }
        .btn:hover { background-color: #a93226; }
    </style>
</head>
<body>

    <div class="topbar">
        <div class="logo-mini">
            <span class="g">G</span>
            <div class="txt">
                <span class="roupe">ROUPE</span>
                <span class="efor">EFOR</span>
            </div>
        </div>
        <div class="user-info">
            <span>Bonjour, {{ Auth::user() ? Auth::user()->name : 'Invité' }}</span>
            <a href="{{ route('logout') }}" class="logout-btn">Se déconnecter</a>
        </div>
    </div>

    <div class="container">

        <div class="intro">
            <h1>Bienvenue sur GEFOR</h1>
            <p>Gestion des émargements et des formations</p>
        </div>

        <h2>Mes cours du jour</h2>

       @if ($cours->count() > 0)
    <ul class="cours-list">
        @foreach ($cours as $c)
        <li class="cours-item" onclick="window.location.href='{{ url('/emargement/create') }}'" style="cursor: pointer;">
    <div>
        <div class="cours-nom">{{ $c->matiere }}</div>
        <div class="cours-details">Salle {{ $c->salle }}</div>
    </div>
    <span class="cours-badge">✍️ Signer</span>
</li>
        @endforeach
    </ul>
@else
            <div class="empty-msg">Aucun cours prévu aujourd'hui</div>
        @endif

        <div class="section-divider">
            <div class="access-card" onclick="window.location.href='{{ url('/accueil') }}'">
                <h3>Voir toutes mes classes et formations</h3>
                <p>Consulte l'ensemble de tes cours classés par formation</p>
                <a href="{{ url('/accueil') }}" class="btn">Accéder au site</a>
            </div>
        </div>

    </div>

</body>
</html>