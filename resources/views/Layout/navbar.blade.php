<div>
    <img src="" alt="logo">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        @if(Request::is('intern')) <!-- Vérifie si la vue actuelle est 'intern.blade.php' -->
            <li><a href="{{ route('OffreStatus') }}">Status</a></li> <!-- Ajout du lien vers l'historique -->
        @endif
    </ul>
</div>