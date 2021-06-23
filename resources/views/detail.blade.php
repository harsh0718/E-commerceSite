@extends("master")
@section("content")
<div class="container">
    <div class="row p-4">
        <div class="col-sm-5">
            <img src="{{$data['gallery']}}" alt="" class="detail_img">
        </div>
        <div class="col-sm-7">
            <a href="/" class="btn btn-outline-warning mb-3">Go Back</a>
            <h3>Name : {{$data['name']}}</h3>
            <h3>Price : {{$data['price']}}</h3>
            <h5>Category : {{$data['category']}}</h5>
            <h5>Description : {{$data['description']}}</h5>
            <div class="order_btn mb-4 mt-4">
            <form action="/add_to_cart" class="d-inline-block">
                <input type="hidden" name="product_id" value="{{$data['id']}}">
                @csrf
                <button class="btn btn-success">Add To Cart</button>
            </form>
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</div>
@endsection
