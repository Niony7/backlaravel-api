<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <link href="../DataTables/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../DataTables/css/jquery.dataTables.min.css" rel="stylesheet">

    </head>
    <body>

            <div class="container">

                   <ul class="nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/">ACCEUIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/appropos">A-ppropos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clients">Voir nos clients</a>
                        </li>
                        
                   </ul>
                
                @yield('content')

            </div>
        </div>
    </body>
</html>
