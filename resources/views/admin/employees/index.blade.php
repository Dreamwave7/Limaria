@extends('admin.layouts.main')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif



    <div class="container-fluid bg-white p-3 rounded">
        <div class="container mt-5">
            <div class="row mb-3">
                <div class="col-md-6 text-left">
                    <a href="{{ route('admin.employees.create')  }}" class="btn btn-primary">Створити працiвника</a>
                </div>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Iмя</th>
                        <th>Прiзвище</th>
                        <th>Опис</th>
                        <th>Фото</th>
                        <th>Посада</th>
                        <th>Номер</th>
                        <th>Дії</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($models as $model)
                        <tr>
                            <td>{{ $model->id }}</td>

                            <td><a href="{{ route("admin.employees.show",["employee" => $model]) }}">{{ $model->first_name }}</a></td>
                            <td>{{ $model->last_name }}</td>
                            <td>{{ $model->description }}</td>
                            <td><img style="width:100px ; height: 75px" src="{{ asset('members-images/'.$model->image) }}"></td>
                            <td>{{ $model->position->name }}</td>
                            <td>
                                @foreach($model->phone as $phone)
                                    <p>{{ $phone->phone }}</p>
                                @endforeach
                            </td>
                            <td>

                                <form action="{{ route("admin.employees.destroy",$model) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group" role="group" aria-label="Category Actions">
                                        <div style="width: 20px;"></div>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Видалити працiвника?')">Видалити</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $models->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
