@extends("layouts.main")

@section("content")

    <div class="page">

        <!-- Breadcrumbs -->
        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.webp);">
            <div class="breadcrumbs-custom-inner">
                <div class="container breadcrumbs-custom-container">
                    <div class="breadcrumbs-custom-main">
                        <h1 class="breadcrumbs-custom-title">Наша команда</h1>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{route('home.index')}}">Головна</a></li>
                        <li><a href="{{route("team.index")}}">Наша команда</a></li>

                    </ul>
                </div>
            </div>
        </section>

        <!-- Our Team-->
        <section class="section section-lg bg-gray-100 text-center">
            <div class="container">
                <h3 class="wow-outer"><span class="wow slideInUp">Працiвники</span></h3>
                <div class="row row-50 row-xxl-70 justify-content-center justify-content-lg-start">

                    @foreach($membersData as $member)


                        <div class="col-md-10 col-lg-6 wow-outer">
                            <!-- Profile Creative-->
                            <article class="profile-creative wow slideInLeft">
                                <figure class="profile-creative-figure"><img class="profile-creative-image" src="members-images/{{$member->image}}" alt="" width="174" height="174"/>
                                </figure>
                                <div class="profile-creative-main">
                                    <h5 class="profile-creative-title">{{$member->first_name}} {{$member->last_name}} </h5>
                                    <p class="profile-creative-position">{{$member->position->name}}</p>
                                    <div class="profile-creative-contacts">
                                    </div>
                                    <p>{{$member->description}}</p>
                                </div>
                            </article>
                        </div>



                    @endforeach



                </div>
            </div>
        </section>

    </div>


@endsection
