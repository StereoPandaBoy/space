@include('header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>

    <style>

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        h1 {
            font-family: barlow condensed;
            font-size: 28px;
            color: #FFFFFF;
        }

        h1 b {
            font-family: barlow condensed;
            font-size: 28px;
            color: #FFFFFF;
        }

        .image-planete {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .image-planete img {
            width: 500px;
            height: 500px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        nav ul {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav ul li {
            list-style: none;
            margin-right: 50px;
        }

        nav ul li a {
            font-family: barlow condensed;
            font-size: 28px;
            color: #FFFFFF;
            text-decoration: none;
        }

        nav ul li a:hover {
            border-bottom: 2px solid #FFFFFF;
        }

        .bloc-description {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .bloc-description p {
            font-family: barlow condensed;
            font-size: 28px;
            color: #FFFFFF;
        }
    </style>
</head>
<!---------------------------------------------------------------------------------------------------------------------------------------------->
<body style="background-image: url('/images/backgrounds/destination.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">

<!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('destinationTitre')
    <div class="container">
        <h1><b>01</b> Choisissez votre destination</h1>
    </div>
    @endsection
    @yield('destinationTitre')
<!---------------------------------------------------------------------------------------------------------------------------------------------->
@section('destinationNav')
    <nav>
        <ul>
            <li><a href="#" class="lien-planete" data-planete="moon">Lune</a></li>
            <li><a href="#" class="lien-planete" data-planete="mars">Mars</a></li>
            <li><a href="#" class="lien-planete" data-planete="titan">Titan</a></li>
            <li><a href="#" class="lien-planete" data-planete="europa">Europa</a></li>
        </ul>
    </nav>
    @endsection
    @yield('destinationNav')
<!---------------------------------------------------------------------------------------------------------------------------------------------->


    @section('destinationImage')
    <div class="image-planete">
    </div>
    @endsection
    @yield('destinationImage')

    @section('destinationBlocDescription')
  
    @endsection
    @yield('destinationBlocDescription')
    
    
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.lien-planete').click(function (e) {
                e.preventDefault();
                var nomPlanete = $(this).data('planete');
                $('.image-planete').html('<img src="/images/planets/' + nomPlanete + '.png" alt="' + nomPlanete + '">');
            });
        });
    </script>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
</body>

</html>

