@extends("master")
@section("content")

<div class="container custom_login">
    <div class="row pt-5">
        <div class="col-md-4  offset-md-4">
            <form action="/login" method="POST">
                <div class="mb-3">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
