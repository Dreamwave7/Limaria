@extends('admin.layouts.main')
@section('content')

    <main class="app-main">
        <div class="container-fluid bg-white p-3 rounded">
            <div class="container mt-5">
                <div>
                    <h1>Заявки з форми звязку</h1>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Статус</th>
                            <th>Iмя</th>
                            <th>Прiзвище</th>
                            <th>Пошта</th>
                            <th>Телефон</th>
                            <th>Повiдомлення</th>
                            <th>Дiя</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($models as $model)
                            <tr>
                                <td>{{ $model->id }}</td>
                                <td style="color: #a7058e">@if(!$model->status) Не оброблено @else Оброблено @endif</td>
                                <td>{{ $model->first_name }}</a></td>
                                <td>{{ $model->last_name }}</td>
                                <td>{{ $model->email }}</td>
                                <td>{{ $model->phone }}</td>
                                <td>{{ $model->message }}</td>
                                <td>

                                    <form action="{{ route("admin.feedback.destroy",$model) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group" role="group" aria-label="Category Actions">
                                            <div style="width: 20px;"></div>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Видалити звернення?')">Видалити</button>
                                        </div>
                                    </form><p></p>

                                    <form action="{{ route("admin.feedback.update",$model) }}" method="POST">
                                        @csrf
                                        @method("PATCH")
                                        <div class="btn-group" role="group" aria-label="Category Actions">
                                            <div style="width: 20px;"></div>
                                            <button type="submit" class="btn btn-success" onclick="return confirm('Обробити звернення?')">Обробити</button>
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




























    </main>
@endsection
