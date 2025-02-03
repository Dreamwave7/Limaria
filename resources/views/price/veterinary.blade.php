@extends("layouts.main")

@section('title', 'Ветеринарні дослідження')
@section('description', "Спеціалізовані мікробіологічні аналізи для здоровя ваших тварин. Виявлення збудників хвороб з високою точністю гарантує ефективне лікування для домашніх улюбленців і сільськогосподарських тварин.")

@push('styles')
    <link rel="stylesheet" href="{{asset('css/price.css')}}">
@endpush

@section("content")

    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.webp);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <p class="breadcrumbs-custom-subtitle title-decorated">Ветеринарія</p>
                    <h1 class="breadcrumbs-custom-title">Ветеринарні дослідження</h1>
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
                <a  href="{{ route('price.download',['priceName'=>"veterinary"]) }}">Завантажити прайс</a>
            </button>
            <h2 class="title mb-4">Бактеріологічні дослідження</h2>
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
                        <td class="table-cell">Бактеріологічне дослідження стерильних рідин, крові (аероби, анаероби). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)  </td>
                        <td class="table-cell">Асептично відібраний зразок крові чи стерильної рідини у флакони для гемокультур. Об`єм для дрібних тварин (до 10 кг) 2 - 5 мл, флакон з поживним середовищем об'ємом - 20 мл. </td>
                        <td class="table-cell">3-10 р.днів </td>
                        <td class="table-cell">1700 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження сечі (аероби) Напівкількісний метод. Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)  </td>
                        <td class="table-cell">Асептично відібраний зразок: 3-10 мл в стерильних контейнерах або в пробірці з борною кислотою </td>
                        <td class="table-cell">1-3 р.дні </td>
                        <td class="table-cell">350 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження стерильних локусів організму (аероби, анаероби). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)  </td>
                        <td class="table-cell">Патологічний матеріал в стерильних ємкостях: лімфатичні вузли, легені, серце, паренхіматозні органи. Свіжий охолоджений труп тварини.</td>
                        <td class="table-cell">3-4 р.дні </td>
                        <td class="table-cell">1000 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження біологічного матеріалу (аероби, анаероби) Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)  </td>
                        <td class="table-cell"> Асептично відібраний зразок - БАЛ, ексудат, транссудат, виділення з рани, матеріал з поверхні шкіри, слизових оболонок, біопсійний матеріал, молоко, жовч, уроліти і тд. - в стерильній ємності або в свабі з транспортним середовищем  </td>
                        <td class="table-cell">2-4 р.дні </td>
                        <td class="table-cell">650 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження фекалій (аероби, анаероби)* Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура) *Salmonella sp та Campylobacter spp не входять у дане дослідження </td>
                        <td class="table-cell">Мазок з прямої кишки, екскременти у вугільному транспортному середовищі </td>
                        <td class="table-cell">2-3 р. дні </td>
                        <td class="table-cell">1000 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження на кампілобактеріоз (Campylobacter spp). Ідентифікація: MALDI-TOF MS. Без визначення чутливості до антибіотиків</td>
                        <td class="table-cell">Мазок з прямої кишки у вугільному транспортному середовищі </td>
                        <td class="table-cell">2-4 р. дні </td>
                        <td class="table-cell">400 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічне дослідження на сальмонельоз (Salmonella spp). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* </td>
                        <td class="table-cell">Мазок, біологічний матеріал в стерильних ємностях або у вугільному транспортному середовищі  </td>
                        <td class="table-cell">3-5 р. днів </td>
                        <td class="table-cell">850 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Бактеріологічні дослідження змивів з об`єктів лікарняного середовища (аероби, анаероби). Ідентифікація: MALDI-TOF MS </td>
                        <td class="table-cell">Змиви з об'єктів лікарняного середовища в свабі з 3 мл фіз.розчину або дист.води </td>
                        <td class="table-cell">2-3 р.дні </td>
                        <td class="table-cell">350 грн</td>
                    </tr>
                    </tbody>
                </table>

                <div class="d-md-none">
                    <div class="row g-3">
                        <div class="col-12">



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження стерильних рідин, крові (аероби, анаероби). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)	</span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Асептично відібраний зразок крові чи стерильної рідини у флакони для гемокультур. Об`єм для дрібних тварин (до 10 кг) 2 - 5 мл, флакон з поживним середовищем об'ємом - 20 мл.	</p>
                                    <p><strong>Тривалість:</strong> 3-10 р.днів		   </p>
                                    <p><strong>Ціна:</strong> 1700 грн </p>
                                </div>
                            </div>


                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження сечі (аероби) Напівкількісний метод. Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Асептично відібраний зразок: 3-10 мл в стерильних контейнерах або в пробірці з борною кислотою	  </p>
                                    <p><strong>Тривалість:</strong> 1-3 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 350 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження стерильних локусів організму (аероби, анаероби). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Патологічний матеріал в стерильних ємкостях: лімфатичні вузли, легені, серце, паренхіматозні органи. Свіжий охолоджений труп тварини.	  </p>
                                    <p><strong>Тривалість:</strong> 3-4 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 1000 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження біологічного матеріалу (аероби, анаероби) Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Асептично відібраний зразок - БАЛ, ексудат, транссудат, виділення з рани, матеріал з поверхні шкіри, слизових оболонок, біопсійний матеріал, молоко, жовч, уроліти і тд. - в стерильній ємності або в свабі з транспортним середовищем	  </p>
                                    <p><strong>Тривалість:</strong> 2-4 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 650 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження фекалій (аероби, анаероби)* Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків* (1 культура) *Salmonella sp та Campylobacter spp не входять у дане дослідження	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Мазок з прямої кишки, екскременти у вугільному транспортному середовищі	  </p>
                                    <p><strong>Тривалість:</strong> 2-3 р. дні		   </p>
                                    <p><strong>Ціна:</strong> 1000 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження на кампілобактеріоз (Campylobacter spp). Ідентифікація: MALDI-TOF MS. Без визначення чутливості до антибіотиків	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Мазок з прямої кишки у вугільному транспортному середовищі	  </p>
                                    <p><strong>Тривалість:</strong> 2-4 р. дні		   </p>
                                    <p><strong>Ціна:</strong> 400 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Бактеріологічне дослідження на сальмонельоз (Salmonella spp). Ідентифікація: MALDI-TOF MS. Чутливість до антибіотиків*	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Мазок, біологічний матеріал в стерильних ємностях або у вугільному транспортному середовищі	  </p>
                                    <p><strong>Тривалість:</strong> 3-5 р. днів	   </p>
                                    <p><strong>Ціна:</strong> 850 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>  Бактеріологічні дослідження змивів з об`єктів лікарняного середовища (аероби, анаероби). Ідентифікація: MALDI-TOF MS	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Змиви з об'єктів лікарняного середовища в свабі з 3 мл фіз.розчину або дист.води	 </p>
                                    <p><strong>Тривалість:</strong> 2-3 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 350 грн</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section section-lg text-center">
        <div class="container">
            <h3 class="title mb-4">Мікологічні дослідження</h3>
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
                        <td class="table-cell">Мікологічне дослідження на Aspergillus spp. Ідентифікація: MALDI-TOF MS     </td>
                        <td class="table-cell">Частинки уражених органів в стерильних ємностях     </td>
                        <td class="table-cell">до 7 р. днів     </td>
                        <td class="table-cell">350 грн</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-cell">Мікологічне дослідження на патогенні гриби. Ідентифікація: MALDI-TOF MS     </td>
                        <td class="table-cell">Частинки уражених органів в стерильних ємностях      </td>
                        <td class="table-cell">до 7 р. днів     </td>
                        <td class="table-cell">400 грн</td>
                    </tr>

                    <tr class="table-row">
                        <td class="table-cell">Мікологічне дослідження на дерматомікози. Ідентифікація: MALDI-TOF MS     </td>
                        <td class="table-cell">Зішкріби з ураженої ділянки тіла тварини разом з кірочками та лусочками, уражене волосся з ділянок, що межують зі здоровою шкірою в стерильних ємностях      </td>
                        <td class="table-cell">до 21 р. днів     </td>
                        <td class="table-cell">450 грн</td>
                    </tr>






                    </tbody>
                </table>



                <div class="d-md-none">
                    <div class="row g-3">
                        <div class="col-12">


                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Мікологічне дослідження на Aspergillus spp. Ідентифікація: MALDI-TOF MS	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong>Частинки уражених органів в стерильних ємностях	     </p>
                                    <p><strong>Тривалість:</strong>до 7 р. днів	    </p>
                                    <p><strong>Ціна:</strong> 350 грн</p>
                                </div>
                            </div>

                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Мікологічне дослідження на патогенні гриби. Ідентифікація: MALDI-TOF MS	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong>Частинки уражених органів в стерильних ємностях	     </p>
                                    <p><strong>Тривалість:</strong>до 7 р. днів	    </p>
                                    <p><strong>Ціна:</strong>400 грн</p>
                                </div>
                            </div>

                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Мікологічне дослідження на дерматомікози. Ідентифікація: MALDI-TOF MS	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong>Зішкріби з ураженої ділянки тіла тварини разом з кірочками та лусочками, уражене волосся з ділянок, що межують зі здоровою шкірою в стерильних ємностях	     </p>
                                    <p><strong>Тривалість:</strong>до 21 р. днів	    </p>
                                    <p><strong>Ціна:</strong>450 грн
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>




    <section class="section section-lg text-center">
        <div class="container">
            <h4 class="title mb-4">Антибіотикограма</h4>
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
                        <td class="table-cell">Визначення чутливості мікроорганізмів до антибактеріальних препаратів автоматичним методом з МІК на аналізаторі Vitek 2 Compact (1 культура)     </td>
                        <td class="table-cell">Виділена 24-годинна культура мікроорганізму на чашці Петрі     </td>
                        <td class="table-cell">1-2 р.дні     </td>
                        <td class="table-cell">600 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Визначення чутливості Candida spp. та дріжджоподібних грибів до антимікотиків автоматичним методом з МІК (1 культура)     </td>
                        <td class="table-cell">Виділена культура мікроорганізму на чашці Петрі     </td>
                        <td class="table-cell">1-2 р.дні     </td>
                        <td class="table-cell">700 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Визначення чутливості мікроорганізмів до антибактеріальних препаратів методом мікросерійних розведень (1 культура)     </td>
                        <td class="table-cell">Виділена 24-годинна культура мікроорганізму на чашці Петрі     </td>
                        <td class="table-cell">1-2 р.дні     </td>
                        <td class="table-cell">400 грн</td>
                    </tr>


                    <tr class="table-row">
                        <td class="table-cell">Визначення чутливості мікроорганізмів до антибактеріальних препаратів диско-дифузійним методом (1 культура)     </td>
                        <td class="table-cell">Виділена 24-годинна культура мікроорганізму на чашці Петрі     </td>
                        <td class="table-cell">1-2 р.дні     </td>
                        <td class="table-cell">250 грн</td>
                    </tr>






                    </tbody>
                </table>



                <div class="d-md-none">
                    <div class="row g-3">
                        <div class="col-12">


                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Визначення чутливості мікроорганізмів до антибактеріальних препаратів автоматичним методом з МІК на аналізаторі Vitek 2 Compact (1 культура)	     </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Виділена 24-годинна культура мікроорганізму на чашці Петрі	  </p>
                                    <p><strong>Тривалість:</strong> 1-2 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 600 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span>Визначення чутливості Candida spp. та дріжджоподібних грибів до антимікотиків автоматичним методом з МІК (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Виділена культура мікроорганізму на чашці Петрі	  </p>
                                    <p><strong>Тривалість:</strong> 1-2 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 700 грн</p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Визначення чутливості мікроорганізмів до антибактеріальних препаратів методом мікросерійних розведень (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Виділена 24-годинна культура мікроорганізму на чашці Петрі	 </p>
                                    <p><strong>Тривалість:</strong> 1-2 р.дні	   </p>
                                    <p><strong>Ціна:</strong> 400 грн
                                    </p>
                                </div>
                            </div>



                            <div class="research-card">
                                <div class="research-header">
                                    <strong>Назва показника:</strong>
                                    <span> Визначення чутливості мікроорганізмів до антибактеріальних препаратів диско-дифузійним методом (1 культура)	       </span>
                                </div>
                                <div class="research-body">
                                    <p><strong>Матеріал:</strong> Виділена 24-годинна культура мікроорганізму на чашці Петрі	  </p>
                                    <p><strong>Тривалість:</strong> 1-2 р.дні		   </p>
                                    <p><strong>Ціна:</strong> 250 грн</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



@endsection
