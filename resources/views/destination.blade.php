@include('header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
</head>

<body style="background-image: url('/images/backgrounds/destination.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">

<!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('destinationTitre')
    <div class="container">
        <h1><b>01</b> Choisissez votre destination</h1>
    </div>
    @endsection
    @yield('destinationTitre')
<!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('destinationImage')
    <div class="image-planete">
    </div>
    @endsection
    @yield('destinationImage')
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

