@extends('admin.layouts.main')




@section('content')

    <main class="app-main">


        <div style="width: 900px; margin-left: 200px; margin-top: 100px" >
            <h1>Існуючі напрямки</h1>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Name</th>
                    <th scope="col">Abbreviation</th>
                    <th scope="col">Description</th>
                    <th scope="col">status</th>
                </tr>
                </thead>
                <tbody>

                @foreach($directions as $direction)
                    <tr>
                        <th scope="row">{{$direction->id}}</th>
                        <td>{{$direction->title}}</td>
                        <td>{{$direction->name}}</td>
                        <td>{{$direction->abbreviation}}</td>
                        <td>{{$direction->description}}</td>
                        <td>{{$direction->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </main>


@endsection
