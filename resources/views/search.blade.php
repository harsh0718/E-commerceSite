@extends("master")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-3">
    <a href="#"> Filter </a>
</div>
<div class="col-md-4">
<div class="tranding_block">
    <h3>Results: </h3>
        @foreach ($data as $search_data )
        <div class="">
            <a href="detail/{{$search_data['id']}}" class="text-decoration-none text-dark">
                <img src="{{$search_data['gallery']}}" class="rounded mx-auto d-block trending_img" alt="...">
                <div class="">
                    <h5>{{$search_data['name']}}</h5>
                    <h5>{{$search_data['description']}}</h5>
                </div>
            </a>
        </div>
        @endforeach

</div>
</div>
    </div>
</div>

@endsection
