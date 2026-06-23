<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Émargements</title>
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
        .page-header p { color: #aaa; font-size: 0.9em; }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead tr {
            background-color: #252b4a;
            border-bottom: 2px solid #3a4170;
        }
        thead th {
            padding: 14px 18px;
            text-align: left;
            font-size: 0.8em;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        tbody tr {
            border-bottom: 1px solid #2a3060;
            transition: background-color 0.15s;
        }
        tbody tr:hover { background-color: #252b4a; }
        tbody td {
            padding: 14px 18px;
            font-size: 0.9em;
            color: #ddd;
        }
        .badge {
            display: inline-block;
            background-color: #2ecc7122;
            color: #2ecc71;
            font-size: 0.75em;
            padding: 4px 10px;
            border-radius: 12px;
        }
        .empty-msg {
            text-align: center;
            color: #777;
            padding: 40px 0;
            background-color: #252b4a;
            border-radius: 14px;
        }
        .signature-img {
            max-height: 50px;
            border-radius: 6px;
            background: white;
            padding: 4px;
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
            <h1>Liste des émargements</h1>
            <p>Toutes les signatures enregistrées</p>
        </div>

        @if ($emargements->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Signature</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emargements as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($e->date)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($e->heure)->format('H\hi') }}</td>
                            <td>
                                @if ($e->signature)
                                    <img src="{{ $e->signature }}" class="signature-img" alt="Signature">
                                @else
                                    <span style="color:#777">—</span>
                                @endif
                            </td>
                            <td><span class="badge">✅ Signé</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty-msg">Aucun émargement enregistré pour le moment</div>
        @endif

    </div>

</body>
</html>