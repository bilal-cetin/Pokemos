<x-app-layout>
    <x-slot name="header">
        Add Possessors
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('possessors.store')}}" enctype="multipart/form-data">
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
                    <label>Score</label>
                    <input type="number" name="score" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Add Possessor</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>