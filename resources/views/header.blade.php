<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Space Tourism</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Bellefair&display=swap" rel="stylesheet">

  <style>

  .container-header {
    display: flex;
    /* align-items: center; */
    justify-content: space-between;
    margin-top: 50px;
  }


/************************************************************************************************************************************/
 
  .logo {
      background-image: url("{{ asset('images/Logo.png') }}");
      background-repeat: no-repeat;
      background-size: cover;
      width: 48px;
      height: 48px;
      margin-left: 50px;
    
      /* margin-top: 50px;
      margin-left: 50px;
      float: left; */



    }

  /************************************************************************************************************************************/

    .trait {
      width: 473PX;
      height: 0.5px;
      background-color: #FFFFFF;
    }

  /************************************************************************************************************************************/
    .nav {
      background-color: rgba(208, 214, 249, 0.2);
      display: block;
      width: 830px;
      height: 96px;
      backdrop-filter: blur(5px);
  
    }
   
*
    .nav ul {
      display: flex;
      justify-content: center;
      list-style-type: none;
      text-align: center;
      text-transform: uppercase;
      font-family: 'Barlow Condensed', sans-serif;
    }

    .nav ul a {
      color: inherit;
      text-decoration: none;
      letter-spacing: 2.7;
      font-size: 16px;
      color: #FFFFFF;
    }

    .nav ul a:hover {
      
      border-bottom: 2px solid #FFFFFF;

    }

    .nav ul li {
      float: left;
      margin-left: 30px;
      margin-top: 30px;
    }

  </style>

</head>


<body>

<!------------------------------------------------------------------------------------------------------------------------------------>
 
<div class="container-header">

<!------------------------------------------------------------------------------------------------------------------------------------>

  <div class="logo"></div>
<!------------------------------------------------------------------------------------------------------------------------------------>
  
  <div class="trait"></div>

<!------------------------------------------------------------------------------------------------------------------------------------>     

  <div class="nav">
    <ul>
      <li>
        <a href="{{ url('/') }}">
          <strong>00</strong>
          Accueil
        </a>
      </li>
      <li>
        <a href="{{ url('/destination') }}">
          <strong>01</strong>
          Destination
        </a>
      </li>
      <li>
        <a href="{{ url('/crew') }}">
          <strong>02</strong>
          Equipage
        </a>
      </li>
      <li>
        <a href="{{ url('/technology') }}">
          <strong>03</strong>
          Technologie
        </a>
      </li>
    </ul>
  </div>

  <!------------------------------------------------------------------------------------------------------------------------------------>

  </div>
    </div>
  
    <!------------------------------------------------------------------------------------------------------------------------------------>
