@extends('admin.layouts.main')




@section('content')

<main class="app-main">


    <div style="width: 900px; margin-left: 200px; margin-top: 50px">
        <h2>Створити працівника</h2>
                <form action="{{route('admin.employees.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">Імя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Прізвище</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="..." required>
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Опис</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="description" name="description" placeholder="..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="В форматі +380..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Фото</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
            </div>





            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Посада</legend>

                    <div class="col-sm-10">
                        @foreach($positionData as $position)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="position_id" id="position_id" value={{$position->id}} checked>
                                <label class="form-check-label" for="gridRadios1">
                                    {{$position->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

            </fieldset>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Відправити</button>
                </div>
            </div>
        </form>
    </div>




</main>


@endsection
