@extends('admin.layouts.main')




@section('content')

<main class="app-main">


    <div style="width: 900px; margin-left: 200px; margin-top: 100px; " >
        <div style="text-align: center;">
            <h1>Існуючі посади</h1>
        </div>


        <a href="{{ route('admin.positions.create') }}" class="btn btn-warning" style="text-decoration: none;">
            Створити нову посаду
        </a>


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Direction name</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($dataPosition as $position)
                <tr>
                    <th scope="row">{{$position->id}}</th>
                    <td>{{$position->name}}</td>
                    <td>{{$position->description}}</td>
                    <td>{{$position->direction->name}}</td>
                    <td>{{$position->status}}</td>
                    <td>
                        <form action="{{route('admin.positions.destroy', $position->id)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


</main>


@endsection
