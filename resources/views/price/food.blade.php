@extends("layouts.main")

@section('title', 'Харчові дослідження')
@section('description', "Забезпечуємо безпеку харчових продуктів завдяки сучасним мікробіологічним дослідженням. Ми допомагаємо контролювати якість і відповідність продукції найвищим стандартам.")

@push('styles')
    <link rel="stylesheet" href="{{asset('css/price.css')}}">
@endpush

@section("content")

    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.webp);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <p class="breadcrumbs-custom-subtitle title-decorated">Дослідження</p>
                    <h1 class="breadcrumbs-custom-title">Харчові дослідження</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('home.index') }}">Головна</a></li>
                </ul>
            </div>
        </div>
    </section>

{{--    <a  href="{{ route('price.download',['priceName'=>"food"]) }}" >Download price</a>--}}
{{--    <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primary link</a></p>--}}
{{--    <button type="button" class="btn btn-warning">Warning</button>--}}
{{--    --}}


    <section class="section section-lg text-center">
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg">
                <a  href="{{ route('price.download',['priceName'=>"food"]) }}">Завантажити прайс</a>
            </button>
            <p class="title mb-4">Таблиця досліджень</p>
            <div class="table-responsive">
                <table class="table table-bordered table-striped d-none d-md-table">
                    <thead class="table-dark">
                    <tr>
                        <th style="color:#FCFEFD" scope="col">Назва показника</th>
                        <th style="color:#FCFEFD;" scope="col">Матеріал для дослідження</th>
                        <th style="color:#FCFEFD;" scope="col">Тривалість</th>
                        <th style="color:#FCFEFD;" scope="col">Ціна</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Бактеріологічний скринінг із використанням методу MALDI TOF</td>
                        <td>Харчові продукти, корма для тварин, питна вода та зразки навколишнього середовища</td>
                        <td>3-5 роб.днів</td>
                        <td>1500 грн</td>
                    </tr>
                    <tr>
                        <td>Мікологічний скринінг із використанням методу MALDI TOF</td>
                        <td>Харчові продукти, корма для тварин, питна вода та зразки навколишнього середовища</td>
                        <td>7-8 роб.днів</td>
                        <td>1500 грн</td>
                    </tr>
                    <tr>
                        <td>Ідентифікація мікроорганізмів методом MALDI TOF</td>
                        <td>Культури мікроорганізмів</td>
                        <td>1-2 роб.днів</td>
                        <td>500 грн</td>
                    </tr>
                    <tr>
                        <td>Відновлення та ідентифікація мікроорганізмів методом MALDI TOF</td>
                        <td>Культури мікроорганізмів</td>
                        <td>2-5 роб.днів</td>
                        <td>800 грн</td>
                    </tr>
                    <tr>
                        <td>Визначення ефективності дезінфікуючих розчинів до бактерій (одна культура)</td>
                        <td>Дезінфікуючі розчини</td>
                        <td>2-5 роб.днів</td>
                        <td>850 грн</td>
                    </tr>
                    <tr>
                        <td>Визначення ефективності дезінфікуючих розчинів до дріжджів та грибів (одна культура)</td>
                        <td>Дезінфікуючі розчини</td>
                        <td>7-10 роб.днів</td>
                        <td>950 грн</td>
                    </tr>
                    </tbody>
                </table>


                <div class="d-md-none">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Бактеріологічний скринінг із використанням методу MALDI TOF</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Харчові продукти, корма для тварин, питна вода та зразки навколишнього середовища</p>
                                    <p><strong>Тривалість:</strong> 3-5 роб.днів</p>
                                    <p><strong>Ціна:</strong> 1500 грн</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Мікологічний скринінг із використанням методу MALDI TOF</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Харчові продукти, корма для тварин, питна вода та зразки навколишнього середовища</p>
                                    <p><strong>Тривалість:</strong> 7-8 роб.днів</p>
                                    <p><strong>Ціна:</strong> 1500 грн</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Ідентифікація мікроорганізмів методом MALDI TOF	</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Культури мікроорганізмів	</p>
                                    <p><strong>Тривалість:</strong> 1-2 роб.днів</p>
                                    <p><strong>Ціна:</strong> 500 грн</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Відновлення та ідентифікація мікроорганізмів методом MALDI TOF	</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Культури мікроорганізмів	</p>
                                    <p><strong>Тривалість:</strong> 2-5 роб.днів	</p>
                                    <p><strong>Ціна:</strong> 800 грн</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Визначення ефективності дезінфікуючих розчинів до бактерій (одна культура)	</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Дезінфікуючі розчини	</p>
                                    <p><strong>Тривалість:</strong> 2-5 роб.днів		</p>
                                    <p><strong>Ціна:</strong> 850 грн</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Визначення ефективності дезінфікуючих розчинів до дріжджів та грибів (одна культура)		</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Дезінфікуючі розчини		</p>
                                    <p><strong>Тривалість:</strong> 7-10 роб.днів		</p>
                                    <p><strong>Ціна:</strong> 950 грн</p>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
