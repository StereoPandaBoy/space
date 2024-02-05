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

        .image-crew {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .image-crew img {
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
<body style="background-image: url('/images/backgrounds/crew.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
<!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('crewTitre')
    <div class="container">
        <h1><b>02</b>rencontrez l'équipage</h1>
    </div>
    @endsection
    @yield('crewTitre')
  
<!---------------------------------------------------------------------------------------------------------------------------------------------->
@section('crewNav')
    <nav>
        <ul>
            <li><a href="#" class="lien-crew" data-planete="douglas">D</a></li>
            <li><a href="#" class="lien-crew" data-planete="mark">M</a></li>
            <li><a href="#" class="lien-crew" data-planete="victor">V</a></li>
            <li><a href="#" class="lien-crew" data-planete="anousheh">A</a></li>
        </ul>
    </nav>
    @endsection
    @yield('crewNav')
<!---------------------------------------------------------------------------------------------------------------------------------------------->


    @section('crewImage')
    <div class="image-crew">
    </div>
    @endsection
    @yield('crewImage')
<!---------------------------------------------------------------------------------------------------------------------------------------------->
    @section('crewBlocDescription')
  
    class="crewBlocDescripton">
            <!------------------------------------------------------------------------------------------->
            <div class="detailsDouglas">
                <h2>commandant</h2>
                <h1>douglas</h1>
                <p>Douglas Gerald Hurley est un ingénieur américain, un
                ancien pilote du Corps des Marines et un ancien astronaute de la NASA.
                Il s'est lancé dans l'espace deux fois, la première fois en juillet 2009.
                </p>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsMark">
                <h2>spécialiste de mission</h2>
                <h1>mark shuttleworth</h1>
                <p>Mark Richard Shuttleworth est le fondateur et le PDG de
                    Canonical Ltd., la société dérrière le système d'exploitation Ubuntu basé 
                    sur Linux Shuttleworth est devenu le premier astronaute sud-africain en 2002.
                </p>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsVictor">
                <h2>pilote</h2>
                <h1>victor glover</h1>
                <p>Pilote du premier vol opérationnel du spaceX crew
                    Dragon à destination de la station spatiale internationale.
                    Grrover est commandant de la marine américaine, ou il pilote
                    un F/A-18. Il à été membres de l'équipage de la mission 
                    Expedition 64/65.
                </p>
            </div>
            <!------------------------------------------------------------------------------------------->
            <div class="detailsAnousheh">
                <h2>ingénieure de vol</h2>
                <h1>anousheh ansari</h1>
                <p>Anousheh Ansari est une ingénieure Irano-Américain et 
                    cofondatrice de Prodea Systems. Ansari était la quatr
                </p>
            </div>
        </div>
    @endsection
    @yield('crewBlocDescription')
    
    
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.lien-crew').click(function() {

                var crew = $(this).data('crew');

                $('.image-crew').html('<img src="/images/crew/' + crew + '.jpg" alt="' + crew + '">');
                $('.bloc-description').html('<p>' + crew + '</p>');
            });
        });
    </script>   
<!---------------------------------------------------------------------------------------------------------------------------------------------->


</body>
</html>
