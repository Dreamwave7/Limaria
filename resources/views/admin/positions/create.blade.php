@extends('admin.layouts.main')




@section('content')

<main class="app-main">

    <div style="width: 900px; margin-left: 200px; margin-top: 250px" >
        <h2>Створити посаду</h2>
        <form action="{{route('admin.positions.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Назва посади</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Назва..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Опис посади</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="description" name="description" placeholder="Опис..." required>
                </div>
            </div>
            <input type="hidden" name="status" value="1">

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Напрямок</legend>
                    <div class="col-sm-10">
                        @foreach($dataDirection as $direction)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="direction_id" id="gridRadios1" value={{$direction->id}} checked>
                                <label class="form-check-label" for="gridRadios1">
                                    {{$direction->name}}
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
