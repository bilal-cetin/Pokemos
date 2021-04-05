<x-app-layout>
    <x-slot name="header">
        Possessors
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                   <a href="{{route('possessors.create')}}" class="btn btn-sm btn-primary">Add Possessor</a> 
            </h5>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Score</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($poss as $pos)
                  <tr>
                    <th>{{$pos->possessor_photo_path}}</th>
                    <td>{{$pos->name}}</td>
                    <td>{{$pos->age}}</td>
                    <td>{{$pos->score}}</td>
                    
                  </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
              {{$poss->links()}}
        </div>
    </div>
</x-app-layout>
