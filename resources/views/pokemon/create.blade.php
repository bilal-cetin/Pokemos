<x-app-layout>
    <x-slot name="header">
        Add Pokemon
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('pokemons.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Add Photo</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label>Height</label>
                    <input type="number" step=0.01 name="height" class="form-control">
                </div>
                <div class="form-group">
                    <label>Evolves From</label>
                    <input type="text" name="evolves_from" class="form-control">
                </div>
                <div class="form-group">
                    <label>Evolves To</label>
                    <input type="text" name="evolves_to" class="form-control">
                </div>
                <div class="form-group">
                    <label>Weakness</label>
                    <input type="text" name="weakness" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ability</label>
                    <input type="text" name="ability" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Add Pokemon</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>