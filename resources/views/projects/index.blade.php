@extends("master")

@section("content")

<div class="card">


    <div class="card-header">

        <a href="{{route("projects.create")}} " class="btn btn-primary">ajouter</a>
    </div>
    <div class="card-body p-0">
    <table class="table table-striped">
    <thead>
   <tr>
    <th>Nom</th>
    <th>Description</th>
    <th>Action</th>
   </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project )
        <tr>

        <td>{{$project->name}} </td>
        <td>{{$project->description}} </td>
        <td class="d-flex ">
            <a href="{{route('projects.edit',$project->id)}} " class="btn btn-warning">Modifier</a>
           <form action="{{route('projects.destroy',$project->id)}}" method="post" style="margin-left: 23px">
            @csrf
            @method("delete")
            <button class="btn btn-danger">suprimer</button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>

    </div>
@endsection
