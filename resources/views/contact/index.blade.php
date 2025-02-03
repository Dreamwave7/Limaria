@extends("layouts.main")

@section("title", "Контакти лабораторії «Лімарія»")
@section("description","Наші послуги – сучасні рішення для медицини, ветеринарії та харчових технологій. Точність, швидкість та надійність – наша перевага.
Телефон: +380751020039
Пошта: info@limaria.com.ua
Соц. Мережі: https://linktr.ee/limarialaboratory")

@section("content")


    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.webp);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <!-- <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6> -->
                    <h1 class="breadcrumbs-custom-title">Контакти</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Головна</a></li>
                    <li class="active">Контакти</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-sm">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                        <ul class="list-0">
                            <li><a target="_blank" class="link-default" href="tel:#">+380751020039</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-email text-primary"></div><a target="_blank" class="link-default" href="mailto:#">info@limaria.com.ua</a>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a target="_blank" class="link-default" href="https://maps.app.goo.gl/CB8M7CA2LLCRMbcGA">Київська область, Вишгородський район, Лютіж, вул. Вітряного 64</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
            <div class="cell-xl-6 align-self-center container">
                <div class="row">
                    <div class="col-lg-9 cell-inner">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">День тижня</th>
                                <th scope="col">Графік роботи</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Понеділок</td>
                                <td>09:00-18:00</td>
                            </tr>

                            <tr>
                                <td>Вівторок</td>
                                <td>09:00-18:00</td>
                            </tr>

                            <tr>
                                <td>Середа</td>
                                <td>09:00-18:00</td>
                            </tr>

                            <tr>
                                <td>Четверг</td>
                                <td>09:00-18:00</td>
                            </tr>

                            <tr>
                                <td>Пятниця</td>
                                <td>09:00-18:00</td>
                            </tr>

                            <tr>
                                <td>Субота</td>
                                <td>Вихідний</td>
                            </tr>

                            <tr>
                                <td>Неділя</td>
                                <td>Вихідний</td>

                            </tr>



                            </tbody>
                        </table>

                        <div class="section-lg">


                            <h3 class="wow-outer"><span class="wow slideInDown">Наші соціальні мережі</span></h3>
                            <!-- RD Mailform-->
                            <p></p><p></p>

                            <div class="wow-outer">
                                <a target="_blank" href="https://invite.viber.com/?g2=AQBzF6MXsk8J%2BVPcvkEvpbJulFvaVZ24ajcsPDCqKkGxgZVnsk7gqD6Ms8UJN0Mf"><img src="images/viber-logo.webp" alt="Логотип Вайбера" width="60" height="40"/></a>
                                <a target="_blank" href="https://t.me/LimariaLaboratory"><img src="images/telegram-logo.webp" alt="Логотип Телеграму" width="60" height="40"/></a>
                                <a target="_blank" href="https://www.instagram.com/limaria_lab/"><img src="images/instagram-logo.webp" alt="Логотип Інстаграму" width="60" height="40"/></a>
                                <a target="_blank" href="https://m.facebook.com/61566606592292/"><img src="images/facebook-logo.webp" alt="Логотип Фейсбук" width="60" height="40"/></a>
                                <a target="_blank" href="https://www.youtube.com/@limaria_lab"><img src="images/youtube-logo.webp" alt="Логотип Ютуб" width="60" height="40"/></a>
                                <a target="_blank" href="https://www.tiktok.com/@limaria_lab"><img src="images/tiktok-logo.webp" alt="Логотип ТікТок" width="60" height="40"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
            <div class="cell-xl-6 align-self-center container">
                <div class="row">
                    <div class="col-lg-9 cell-inner">
                        <div class="section-lg">
                            <h3 class="wow-outer"><span class="wow slideInDown">Звязатись з нами</span></h3>
                            <!-- RD Mail form-->
                            @include("partials.feedback_form")
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell-xl-5 height-fill wow fadeIn">
                @include("partials.googlemap")
                <!--Please, add the data attribute data-key="AIzaSyBIqAecnXVJZ53cVWY2hXbf30DIYaJUYNM" in order to insert your own API key for the Google map.-->
                <!--Please note that YOUR_API_KEY should replaced with your key.-->
                <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
                <!-- <div class="google-map-container" data-key="AIzaSyBIqAecnXVJZ53cVWY2hXbf30DIYaJUYNM" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" >
                  <div class="google-map"></div>
                  <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                  </ul>
                </div> -->
            </div>
        </div>
    </section>







@endsection

