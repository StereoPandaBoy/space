<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Destination</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Bellefair&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      color: white;
      background-color: black;
      font-family: 'Barlow Condensed', sans-serif;
    }

    .nav {
      display: block;
      width: 100%;
      float: left;
    }

    .nav ul {
      float: right;
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-transform: uppercase;
      font-family: 'Barlow Condensed', sans-serif;


    }

    .nav ul a {
      color: inherit;
      text-decoration: none;
    }

    .nav ul li {
      float: left;
    }
  </style>

</head>

<!------------------------------------------------------------------------------------------------------------------------------------>
<body>

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
