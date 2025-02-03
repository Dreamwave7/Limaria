@extends("layouts.main")

@section('title', 'Медичні дослідження')
@section('description', "Ми проводимо точні мікробіологічні дослідження для складних випадків, забезпечуючи швидкі та достовірні результати. Досліджуємо зразки крові, сечі, мокротиння, ранового матеріалу та іншого біологічного матеріалу.")


@push('styles')
    <link rel="stylesheet" href="{{asset('css/price.css')}}">
@endpush


@section("content")


        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.webp);">
            <div class="breadcrumbs-custom-inner">
                <div class="container breadcrumbs-custom-container">
                    <div class="breadcrumbs-custom-main">
                        <p class="breadcrumbs-custom-subtitle title-decorated">Медицина</p>
                        <h1 class="breadcrumbs-custom-title">Медичні дослідження</h1>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('home.index') }}">Головна</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section section-lg text-center">
            <div class="container">
                <button type="button" class="btn btn-primary btn-lg">
                    <a  href="{{ route('price.download',['priceName'=>"medical"]) }}">Завантажити прайс</a>
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

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження сечі. Аероби. Анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)
                            </td>

                            <td class="table-cell">Асептично відібраний зразок: 5-10 мл в стерильних контейнерах
                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">405 грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження крові. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Асептично відібраний зразок крові у флакони для гемокультур

                            </td>

                            <td class="table-cell">3-10 р.днів
                            </td>
                            <td class="table-cell">1100
                                грн</td>
                        </tr>


                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження калу на дисбактеріоз. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM). (Сальмонельоз, кампілобактеріоз досліджуються окремо).

                            </td>

                            <td class="table-cell">Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">570
                            </td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження калу на патогенну мікрофлору (Campylobacter sp.). Чутливість до антибіотиків диско-дифузійним методом  (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">515 грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження калу на патогенну мікрофлору (Salmonella, Shigella). Чутливість до антибіотиків диско-дифузійним методом  (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">405
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження виділень з носу. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з слизових оболонок  носа в гелевому транспортному середовищі

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">455
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження виділень з ротоглотки (зіву). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з слизових оболонок  рота або горла в гелевому транспортному середовищі

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">455
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження харкотиння, БАЛ та іншого матеріалу з нижніх дихальних шляхів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері

                            </td>

                            <td class="table-cell">3-10 р.днів
                            </td>
                            <td class="table-cell">495
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження матеріалу з інфікованих ран (шматочки тканин та кісток, гній, аспірати, ексудати, тощо). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Матеріал з рани, абсцесів, дренажу  тощо в гелевому транспортному середовищі

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">435
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження матеріалу з вуха. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з одного/обох вух одного пацієнта в гелевому транспортному середовищі

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">440
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження матеріалу з ока. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Мазок з слизових оболонок одного/обох очей одного пацієнта в гелевому транспортному середовищі

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">440
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження виділень з чоловічих статевих органів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори)/(ID: MALDI-TOF MS/ AST:DDM) (Специфічні збудники: Mycoplasma hominis, Ureaplasma spp., Trichomonas vaginalis та ін. в даному дослідженні не визначаються)

                            </td>

                            <td class="table-cell">Мазки в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">455
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження виділень з жіночих статевих органів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM) (Специфічні збудники: Mycoplasma hominis, Ureaplasma spp., Trichomonas vaginalis та ін. в даному дослідженні не визначаються)

                            </td>

                            <td class="table-cell">Мазки в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">445
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження грудного молока. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Асептично відібраний зразок: 5 мл в стерильних контейнерах (для кожної залози окремий)

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">395
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження жовчі. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Асептично відібраний зразок: 3-5 мл в шприцах, стерильних контейнерах

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">515
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження рідин із стерильних порожнин (суглобна, плевральна, перитонеальна, перикардиальна). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Асептично відібраний зразок: 3-5 мл в шприцах, стерильних контейнерах

                            </td>

                            <td class="table-cell">3-10 р.днів
                            </td>
                            <td class="table-cell">493
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження спинно-мозкової рідини. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Асептично відібраний зразок: 3-5 мл в стерильній пробірці, що герметично закривається (підігріта до 37 °C) або в транспортно-культиваційному середовищі (підігріте до 37°C)

                            </td>

                            <td class="table-cell">3-10 р.днів
                            </td>
                            <td class="table-cell">500
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження операційного та секційного матеріалу. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">515
                                грн</td>
                        </tr>

                        <tr class="table-row">
                            <td class="table-cell">Бактеріологічне дослідження внутрішньосудинної частини катетера. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)

                            </td>

                            <td class="table-cell">Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері

                            </td>

                            <td class="table-cell">2-4 р.дні
                            </td>
                            <td class="table-cell">530
                                грн</td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        <div class="d-md-none">
            <div class="row g-3">


                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження сечі. Аероби. Анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)       </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок: 5-10 мл в стерильних контейнерах  </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	   </p>
                            <p><strong>Ціна:</strong> 405 грн
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження крові. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)	       </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок крові у флакони для гемокультур	  </p>
                            <p><strong>Тривалість:</strong> 3-10 р.днів	    </p>
                            <p><strong>Ціна:</strong> 1100 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження калу на дисбактеріоз. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM). (Сальмонельоз, кампілобактеріоз досліджуються окремо).        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 570    </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження калу на патогенну мікрофлору (Campylobacter sp.). Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong>Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності	   </p>
                            <p><strong>Тривалість:</strong>2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong>515 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span>Бактеріологічне дослідження калу на патогенну мікрофлору (Salmonella, Shigella). Чутливість до антибіотиків диско-дифузійним методом (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з прямої кишки у вугільному транспортному середовищі, або кал в стерильній ємності	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 405 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження виділень з носу. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з слизових оболонок  носа в гелевому транспортному середовищі	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong>455 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження виділень з ротоглотки (зіву). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з слизових оболонок  рота або горла в гелевому транспортному середовищі	  </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 455 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження харкотиння, БАЛ та іншого матеріалу з нижніх дихальних шляхів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері	   </p>
                            <p><strong>Тривалість:</strong> 3-10 р.днів	   </p>
                            <p><strong>Ціна:</strong> 495 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження матеріалу з інфікованих ран (шматочки тканин та кісток, гній, аспірати, ексудати, тощо). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Матеріал з рани, абсцесів, дренажу  тощо в гелевому транспортному середовищі	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 435 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження матеріалу з вуха. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з одного/обох вух одного пацієнта в гелевому транспортному середовищі	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 440 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження матеріалу з ока. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазок з слизових оболонок одного/обох очей одного пацієнта в гелевому транспортному середовищі	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	   </p>
                            <p><strong>Ціна:</strong> 440 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження виділень з чоловічих статевих органів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори)/(ID: MALDI-TOF MS/ AST:DDM) (Специфічні збудники: Mycoplasma hominis, Ureaplasma spp., Trichomonas vaginalis та ін. в даному дослідженні не визначаються)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазки в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері	   </p>
                            <p><strong>Тривалість:</strong>2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 455 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження виділень з жіночих статевих органів. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM) (Специфічні збудники: Mycoplasma hominis, Ureaplasma spp., Trichomonas vaginalis та ін. в даному дослідженні не визначаються)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Мазки в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері	  </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 445 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження грудного молока. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок: 5 мл в стерильних контейнерах (для кожної залози окремий)	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 395 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження жовчі. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення мікрофлори) /(ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок: 3-5 мл в шприцах, стерильних контейнерах	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	   </p>
                            <p><strong>Ціна:</strong> 515 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження рідин із стерильних порожнин (суглобна, плевральна, перитонеальна, перикардиальна). Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок: 3-5 мл в шприцах, стерильних контейнерах	  </p>
                            <p><strong>Тривалість:</strong> 3-10 р.днів	   </p>
                            <p><strong>Ціна:</strong> 493 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження спинно-мозкової рідини. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Асептично відібраний зразок: 3-5 мл в стерильній пробірці, що герметично закривається (підігріта до 37 °C) або в транспортно-культиваційному середовищі (підігріте до 37°C)	  </p>
                            <p><strong>Тривалість:</strong> 3-10 р.днів	    </p>
                            <p><strong>Ціна:</strong> 500 грн
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження операційного та секційного матеріалу. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 515 грн</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="research-card">
                        <div class="research-header">
                            <strong>Назва показника:</strong>
                            <span> Бактеріологічне дослідження внутрішньосудинної частини катетера. Аероби, анаероби. Чутливість до антибіотиків диско-дифузійним методом (у разі виявлення умовно-патогенної та патогенної мікрофлори) / (ID: MALDI-TOF MS/ AST:DDM)	        </span>
                        </div>
                        <div class="research-body">
                            <p><strong>Матеріал:</strong> Матеріал в гелевому транспортному середовищі або асептично відібраний зразок в стерильному контейнері	   </p>
                            <p><strong>Тривалість:</strong> 2-4 р.дні	    </p>
                            <p><strong>Ціна:</strong> 530 грн
                            </p>
                        </div>
                    </div>
                </div>






            </div>
        </div>
        </section>
@endsection
