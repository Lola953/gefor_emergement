<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <p>Bonjour, {{ Auth::user()->name }}</p>

    <p>
        <a href="{{ route('logout') }}"
           class="btn btn-outline-danger">
            Se déconnecter
        </a>
    </p>
    
    <ul>
        @foreach ($cours as $c)
            <li>
                Cours de {{ $c->matiere }} - 
                le {{ Carbon\Carbon::parse($c->heure_debut)->format ('H\hi') }}
                dans la salle  {{ $c->salle }}
                
                

            </li>
        @endforeach
    </ul>

    <h1>Bienvenue sur GEFOR</h1>
    <p>Gestion des émargements et des formations</p>
    <a href="/accueil">Accéder au site</a>
    
    
</body>
</html>