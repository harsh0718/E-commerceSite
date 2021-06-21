@extends("master")
@section("content")
<div id="carouselExampleControls" class="carousel carousel-dark bg-info slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($product_data as $data )
        <div class="carousel-item {{ $data['id']==5?'active':'' }} ">
            <a href="detail/{{$data['id']}}" class="text-decoration-none">
                <img src="{{$data['gallery']}}" class="rounded mx-auto d-block slider_img" alt="...">
                <div class="d-none d-md-block text-center text-dark text-decoration-none">
                    <h5 class="">{{$data['name']}}</h5>
                    <p>{{$data['description']}}</p>
                </div>
            </a>
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="tranding_block">
    <h1>Trending Products</h1>
    <div class="trending_items">
        @foreach ($product_data as $data )
        <div class="individual">
            <a href="detail/{{$data['id']}}" class="text-decoration-none text-dark">
                <img src="{{$data['gallery']}}" class="rounded mx-auto d-block trending_img" alt="...">
                <div class="">
                    <h5>{{$data['name']}}</h5>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>

@endsection
