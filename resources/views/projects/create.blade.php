@extends("master")

@section("content")


<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>


        <form action="{{route('projects.store')}}" method="POST" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Discription</label>
                    <input type="text" class="form-control" id="description" description="description" placeholder="Enter description">
                </div>


            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


@endsection
