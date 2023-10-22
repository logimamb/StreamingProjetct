<h1>BONJOUR TOUT LE MONDE !</h1>
@foreach ($comptes as $compte)
    <p>Le compte : {{$compte->nom}} appartient à <strong>{{ $compte->user->nom }} {{ $compte->user->prenom }}</strong>, {{$compte->lienCompte}}</p>
@endforeach