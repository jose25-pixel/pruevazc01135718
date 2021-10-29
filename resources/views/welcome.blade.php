<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color:#E5E8E8 ;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }
            .radios{
                border-radius: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
            @endif

   <div class="container">
             <div class="content">
                    <div class="title m-b-md p-5">
                        SISTEMA DE NOTAS
                    </div>

                <div class="row">
                    <div class="col-12 col-sm-10 col-lg-4 ">

              <a href="{{ route('login') }}" title=""> <img class="img-fluid mb-4"   style="border-radius: 50%;"  src="{{ asset('images/images.jpg')}}" alt=""></a>
          <p class="lead text-dark">Adminitrador</p>
                    </div>
                  <div class="col-12 col-sm-10 col-lg-4">

                    <a href="{{ route('login') }}" title=""> <img style="border-radius: 50%;"  height="400px" width="280px" class="img-fluid mb-4" src="{{ asset('images/profesor.png')}}" alt=""> </a>
                             <p class="lead text-dark">Profesor</p>
                </div>
                  <div class="col-12 col-sm-10 col-lg-4">

                    <a href="{{ route('login') }}" title=""> <img class="img-fluid mb-4" style="border-radius: 50%;"  height="400px" width="280px"  src="{{ asset('images/estudiante.png')}}" alt=""> </a>
                    <p class="lead text-dark">Estudiante</p>


    </div>
    </div>
              <footer class="bg-primary mt-4">
    <div class="footer-content py-3">
        <p class="text-center m-0 text-light">Sistemas de Notas | Jose Zabaleta</p>
    </div>
</footer>

        </div>


    </body>
</html>