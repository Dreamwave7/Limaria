@extends('admin.layouts.main')

@section('content')



        <div class="container-fluid bg-white p-3 rounded">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0">Працiвник : <strong>{{ $employee->first_name }} {{ $employee->last_name }}</strong></h4>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="container mt-5">
                <div class="row">

                    <div class="col-md-12 text-left">
{{--                        <a href="" class="btn btn-primary">Редагувати</a>--}}
                    </div>
                </div>
                <pre></pre>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row" style="width: 20%;">Iмя</th>
                                <td>{{ $employee->first_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 20%;">Прiзвище</th>
                                <td>{{ $employee->last_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 20%;">Опис</th>
                                <td>{{ $employee->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 20%;">Телефон</th>
                                <td>
                                    @foreach($employee->phone as $phone)
                                        {{$phone->phone}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 20%;">Посада</th>
                                <td>{{ $employee->position->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 20%;">Фото</th>
                                <td><figure class="profile-creative-figure" style="height: 174px ; width: 174px"><img class="profile-creative-image" src="{{ asset("members-images/".$employee->image) }}" alt="" /></figure></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>







@endsection
