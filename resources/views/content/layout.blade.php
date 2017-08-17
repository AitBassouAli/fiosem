<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>fiosem</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('http://icon-icons.com/icons2/644/PNG/512/yellow_phone_icon-icons.com_59581.png') }}">

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
    </style>

</head>

<body>
 <div class="body"></div>
    <div class="container" style="position: relative;">
        @include('content.header.logo')
        @include('content.header.navbar')
        <div class="content_body">
                @include('content.header.caroussel')
        </div>
        <div class="row">
            <div class="col-md-8 "  >
                <div style=" border: solid;border-color: lightgray; margin-top: 1%; padding: 5%;">
                    @yield('body_left')
                </div>
            </div>
            <div class="col-md-4 " >
                <div style=" margin-top: 1%; padding: 10%; padding-right: 0%;padding-left: 0%">
                    @include('content.body_right')
                </div>
            </div>
        </div>

        @yield('content')

          
        @include('content.footer.footer')
      </div> 
  

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
   
   

    <script>
    new WOW().init();
    </script>
  
     
 
</body>
</html>