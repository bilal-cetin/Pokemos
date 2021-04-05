<x-app-layout>
    <x-slot name="header">
        Pokemons
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                   <a href="{{route('pokemons.create')}}" class="btn btn-sm btn-primary">Add Possessor</a> 
            </h5>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Height</th>
                    <th scope="col">Evolves From</th>
                    <th scope="col">Evolves To</th>
                    <th scope="col">Weakness</th>
                    <th scope="col">Ability</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($pokemons as $pokemon)
                  <tr>
                    <th><img src="{{$pokemon->image}}"/></th>
                    <td>{{$pokemon->name}}</td>
                    <td>{{$pokemon->age}}</td>
                    <td>{{$pokemon->height}}</td>
                    <td>{{$pokemon->evolves_from}}</td>
                    <td>{{$pokemon->evolves_to}}</td>
                    <td>{{$pokemon->weakness}}</td>
                    <td>{{$pokemon->ability}}</td>
                    
                  </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
              {{$pokemons->links()}}
        </div>
    </div>
</x-app-layout>
