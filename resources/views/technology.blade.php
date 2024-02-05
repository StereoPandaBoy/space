@include('header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipage</title>

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

        .image-technology {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .image-technology img {
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

<body
    style="background-image: url('/images/backgrounds/technology.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('technologyTitre')
    <div class="container">
        <h1><b>03</b>lancement spatial 101</h1>
    </div>
    @endsection
    @yield('technologyTitre')

    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('technologyNav')
    <nav>
        <ul>
            <li><a href="#" class="lien-technology" data-technology="lanceur">L</a></li>
            <li><a href="#" class="lien-technology" data-technology="spatioport">S</a></li>
            <li><a href="#" class="lien-technology" data-technology="capsule">C</a></li>
        </ul>
    </nav>
    @endsection
    @yield('technologyNav')
    <!---------------------------------------------------------------------------------------------------------------------------------------------->


    @section('technologyImage')
    <div class="image-technology">
    </div>
    @endsection
    @yield('technologyImage')


    class="technologyBlocDescripton">
    <!------------------------------------------------------------------------------------------->
    <div class="detailsLanceur">
        <h2>la</h2>
        <h1>le lanceur</h1>
        <p>Un Lanceur ou une fusée porteuse est un véhicule
            propulsé par fusée utilisé pour transporter une charge utile
            de la surface de la terre vers l'espace,
            habituellement vers l'orbite terrestre ou au delà.
            Notre fusée WEB-X est la plus puissante en service.
        </p>
    </div>
    <!------------------------------------------------------------------------------------------->
    <div class="detailsSpatioport">
        <h2>la</h2>
        <h1>le spatioport</h1>
        <p>Un Spatioport ou Cosmodrome est un site de lancement
            (ou de reception)d'engins spatiaux, par analogie avec le
            port maritime pour les navires ou l'aéroport pour les aeronefs.
            Basé au célebre Cap Canaveral, notre spatioport est le plus
            actif de la planète.
        </p>
    </div>
    <!------------------------------------------------------------------------------------------->
    <div class="detailsCapsule">
        <h2>la</h2>
        <h1>la capsule spatiale</h1>
        <p>Une capsule spatiale est un engin habitable qui 
            utilise une capsule à corps émoussé pour rentrer dans l'atmosphère
            terrestre sans ailes.Notre capsule est l'endroit
            ou vous passerez votre temps pendant le vol.
        </p>
    </div>
    </div>
    @endsection
    @yield('technologyBlocDescription')

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
             $('.lien-technology').click(function () {

                 var technology = $(this).data('technology');

     mage-technology').html('<img src="/images/technology/' + technology + '.jpg" alt="' + technology + '">');
                $('.bloc-description').html('<p>' + technology + '</p>');
            });
        });
    </script>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
</body>

</html>



</body>

</html>