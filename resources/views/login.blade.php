<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEFOR - Connexion</title>
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
        }
        .card {
            background-color: #252b4a;
            padding: 50px 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
            text-align: center;
        }
        .logo-wrapper {
            background-color: #1a1f3c;
            border-radius: 50%;
            width: 150px;
            height: 150px;
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
        .subtitle {
            color: #aaa;
            font-size: 0.85em;
            margin-bottom: 35px;
        }
        .alert {
            background-color: #c0392b33;
            border: 1px solid #c0392b;
            color: #ff6b6b;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.85em;
        }
        .field {
            margin-bottom: 20px;
            text-align: left;
        }
        .field label {
            display: block;
            color: #aaa;
            font-size: 0.8em;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .field input {
            width: 100%;
            padding: 12px 16px;
            background-color: #1a1f3c;
            border: 1px solid #3a4170;
            border-radius: 10px;
            color: white;
            font-size: 0.95em;
            outline: none;
            transition: border-color 0.2s;
        }
        .field input:focus { border-color: #c0392b; }
        .btn {
            width: 100%;
            background-color: #c0392b;
            color: white;
            padding: 13px;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        .btn:hover { background-color: #a93226; }
        .btn-mobile {
            display: block;
            margin-top: 20px;
            color: #aaa;
            font-size: 0.85em;
            text-decoration: none;
            transition: color 0.2s;
        }
        .btn-mobile:hover { color: #c0392b; }
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

        <p class="subtitle">Émargement numérique</p>

        @if (session('error'))
            <div class="alert">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required autofocus>
            </div>
            <div class="field">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required>
            </div>
            <button type="submit" class="btn">Connexion</button>
        </form>

        <a href="{{ url('/mobile') }}" class="btn-mobile">📱 Accéder à la version mobile</a>

    </div>
</body>
</html>