<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>
    <h5 class="card-title">
        <a href="{{route('possessors.index')}}" class="btn btn-sm btn-primary">Possessors Page</a> 
 </h5>
 <h5 class="card-title">
    <a href="{{route('pokemons.index')}}" class="btn btn-sm btn-primary">Pokemons Page</a> 
</h5>
</x-app-layout>
