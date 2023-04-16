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
        <td>
            <button class="btn btn-warning">Modifier</button>
            <button class="btn btn-danger">suprimer</button>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>

    </div>
@endsection
