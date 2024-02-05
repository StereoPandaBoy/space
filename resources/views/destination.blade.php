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

<body
    style="background-image: url('/images/backgrounds/destination.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('destinationTitre')
    <div class="container">
        <h1><b>01</b> Choisissez votre destination</h1>
    </div>
    @endsection
    @yield('destinationTitre')
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('destinationNav')
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

    <body
        style="background-image: url('/images/backgrounds/destination.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
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
        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
        @section('destinationBlocDescription')

        <div class="destinationBlocDescripton">
            <!------------------------------------------------------------------------------------------->
            <div class="detailsMoon">
                <h1>lune</h1>
                <p>Voyez notre planète comme vous ne l'avez jamais vue auparavant.
                    un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué.
                    Pendant que vous y étés, plongez-vous dans l'histoire en visitant les sites d'alunissage.
                </p>
                <div class="moonDistance">384 000 km</div>
                <div class="moonDuree">3 jours</div>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsMars">
                <h1>mars</h1>
                <p>N'oubliez pas vos bottes de randonnée.
                    Vous en aurez besoin pour gravir le mont Olympus, la plus haute
                    montagne planétaire dans notre système solaire. il fait 3 fois plus
                    haut que l'Everest!
                </p>
                <div class="marsDistance">225 gm</div>
                <div class="marsDuree">9 mois</div>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsEurope">
                <h1>europe</h1>
                <p>La plus petite des quatres lunes galiléennes en orbite
                    autour de Jupiter, Europe est le rêve des amoureux de l'hiver.
                    Sa surface glacée est parfaite pour faire un peu de patin
                    à glace, du curling, du hockey ou tout simplement pour faire des anges.
                </p>
                <div class="europeDistance">628 gm</div>
                <div class="europeDuree">3 ans</div>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsTitan">
                <h1>titan</h1>
                <p>La seule lune connue pour avoir une atmosphère dense
                    autre que la Terre, Titan est comme une maison loin de la
                    maison(et juste quelques centaines de degrés plus froid!).
                    En bonus, vous pouvez contempler des vues à couper le souffle.
                </p>
                <div class="titanDistance">1,6 tm</div>
                <div class="moonDuree">7 ans</div>
            </div>
        </div>


        @endsection
        @yield('destinationBlocDescription')
        <!-------------------------------------------------------------------------------------------------------------------------------------------------->

        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.lien-planete').click(function (e) {
                    e.preventDefault();
                    var nomPlanete = $(this).data('planete');
                    $('.image-planete').html('<img src="/images/planets/' + nomPlanete.png" alt="' + nomPlanete + '">'               });
            });
        </script>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    </body>

    </html>



</body>

</html>

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
            $('.image-planete').html('<img src="/images/planets/' + nomPlanete + '.pngt="'lanete + '">');
        });
    });
</script>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
</body>

</html>