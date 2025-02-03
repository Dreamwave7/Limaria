@extends('admin.layouts.main')




@section('content')

    <main class="app-main">
            <div style="width: 900px; margin-left: 200px; margin-top: 100px" >
                <h1>Існуючі телефони</h1>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Номер</th>
                        <th scope="col">Власник</th>
                        <th scope="col">Створений</th>
{{--                        <th scope="col">Дія</th>--}}
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $phone)
                        <tr>
                            <th scope="row">{{$phone->id}}</th>
                            <td>{{$phone->phone}}</td>
                            <td>{{$phone->employee->first_name}} {{$phone->employee->last_name}}</td>
                            <td>{{$phone->created_at}}</td>
{{--                            <td>--}}
{{--                                <form action="{{route('admin.delete.phone')}}" method="post">--}}
{{--                                    @method("delete")--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="phone_id" value={{$phone->id}}>--}}
{{--                                    <button type="submit">Delete</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

{{--            <div style="width: 900px; margin-left: 200px; margin-top: 250px" >--}}
{{--                <h2>Створити номер</h2>--}}
{{--                <form action="{{route('admin.save.phone')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method("post")--}}
{{--                    <div class="form-group row">--}}
{{--                        <label for="phone" class="col-sm-2 col-form-label">Номер телефону</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+380..." required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <button type="submit" class="btn btn-primary">Відправити</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}


    </main>
@endsection
