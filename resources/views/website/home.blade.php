<!DOCTYPE html>
<html lang="en">

@include('website.partials.head')

<body class="pt-5">

    @include('website.partials.navbar')

    <!-- HERO -->
    @if($banner)
    <header class="min-vh-100 d-flex align-items-center justify-content-center text-center text-white position-relative"
        style="background-image:url('{{asset('assets/images/'.$banner->bg_img)}}'); background-size:cover; background-position:center; background-attachment:fixed;">

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

        <div class="container position-relative">
            <h1 class="display-2 fw-bold">{{$banner->title}}</h1>
            <p class="fs-4 mb-4">{{$banner->sub_title}}</p>
            <a href="{{$banner->btn_link}}" class="btn btn-warning btn-lg fw-semibold px-4">{{$banner->btn_txt}}</a>
        </div>
    </header>
    @endif


    <!-- WHY PAKISTAN -->
    @if($whysection)
    <section class="py-5">
        <div class="container text-center">

            <h1>{{$whysection->title}}</h1>
            <p>{{$whysection->sub_title}}</p>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="card shadow p-4">
                        <h2>{{$whysection->card1_number}}</h2>
                        <p>{{$whysection->card1_text}}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow p-4">
                        <h2>{{$whysection->card2_number}}</h2>
                        <p>{{$whysection->card2_text}}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow p-4">
                        <h2>{{$whysection->card3_number}}</h2>
                        <p>{{$whysection->card3_text}}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif


    <!-- DESTINATIONS -->
<section class="bg-light py-5">
    <div class="container">

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <h2 class="fw-bold mb-1">Destinations</h2>
                <p class="text-secondary mb-0">
                    Start with some of Pakistan's most iconic places.
                </p>
            </div>

            <a href="#" class="btn btn-outline-success">View All</a>
        </div>

        @if($destinations->count() > 0)

<div class="row g-4">

    @foreach($destinations as $destination)

    <div class="col-12 col-md-4">
        <div class="card h-100 border-0 shadow-sm overflow-hidden">

            <img src="{{asset('assets/images/'.$destination->image)}}"
                 class="card-img-top object-fit-cover"
                 style="height:230px;"
                 alt="{{$destination->title}}">

            <div class="card-body p-4">

                <small class="text-secondary">
                    {{$destination->region}}
                </small>

                <h3 class="fs-4 fw-bold mt-1">
                    {{$destination->title}}
                </h3>

                <p>
                    {{$destination->about}}
                </p>

                <p class="small">
                    <strong>Best for:</strong>
                    {{$destination->best_for}}
                </p>

                <a href="{{$destination->button_link}}"
                   class="btn btn-outline-success">
                    {{$destination->button_text}}
                </a>

            </div>
        </div>
    </div>

    @endforeach

</div>

@endif

    </div>
</section>


    <!-- EXPLORE MORE -->
<section class="container py-5">
    <h2 class="text-center fw-bold mb-5">Explore More</h2>

    @if($explore)
    <div class="row g-4">
        @for($i=1;$i<=3;$i++)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow p-4 text-center">
                <div class="card-body">
                    <h3 class="fs-4 fw-bold">{{data_get($explore,'card'.$i.'_title')}}</h3>

                    <p>{{data_get($explore,'card'.$i.'_description')}}</p>

                    <a href="{{data_get($explore,'card'.$i.'_link')}}" class="btn btn-success">
                        {{data_get($explore,'card'.$i.'_button')}}
                    </a>
                </div>
            </div>
        </div>
        @endfor
    </div>
    @endif
</section>

    @include('website.partials.footer')

</body>
</html>