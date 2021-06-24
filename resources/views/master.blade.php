<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .custom_login{
            height: 449px;
        }
        .slider_img{
            height: 300px;
        }
        .custom_carousle
        {
            height: 449px;
        }
        .trending_img{
            height: 150px;
        }
        .trending_items{
            display: flex;
            justify-content: space-around;
            cursor: pointer;
            padding: 10px;
        }
        .tranding_block{
            margin: 20px;
        }
        .tranding_block h1{
            font-weight: bolder;
            padding-bottom: 20px;
        }
        .detail_img{
            height: 200px;
        }
        .search_item{
            /* width:500px;!important */
        }


    </style>

</head>
<body>
    {{ View::make('header') }}

    @yield("content")

    {{ View::make('footer') }}

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {

    });
</script>
</html>
