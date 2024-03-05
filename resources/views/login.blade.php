<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Autor: Gabriel Ramirez | Diseñador Web
    Tema:Login Class="Gabriel".
    Fecha:11/01/2019.
    pagina Web: https://www.tonygabriel.ga/
    -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====================================================================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--====================================================================================================================================-->
<link rel="stylesheet" href="css/style.css">
<!--====================================================================================================================================-->
<title>Cadastro de Usuários</title>
</head>

<body>
    <div align="center"><a href="https://www.tonygabriel.ga/" target="_blank"><img src="https://i.imgur.com/yv9jx9A.gif"
                width="auto" height="auto" alt="" class="rounded mx-auto d-block img-fluid"></a></div>



    <div class="container"> <br> <br>
        <div class="row">
            <div class="col">

                <form class="login100-form validate-form" method="POST" action="{{ route('login.store') }}">
                    @csrf
                    <br> <br> <br>
                    <h3 align="center">Entrar</h3> <br>
                    <div class="container">

                        <i class="fa fa-envelope"></i>
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>

                        @if ($errors->has('loginError'))
                            <div class="alert alert-danger">
								<strong class="my-2 text-danger">{{ $errors->first('loginError') }}</strong>
                                
                            </div>
                        @endif


                        <br>
                        <i class="fa fa-key"></i>
                        <label for="">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Senha"
                            required>

                        @if ($errors->has('password'))
                            <strong class="my-2 text-danger">{{ $errors->first('password') }}</strong>
                        @endif



                        <br>

                        <br>
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                Entrar
                            </button>
                        </div>




                </form>

            </div>

            <br>

        </div>
        <br> <br> <br> <br>


        <!--====================================================================================================================================-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
        <!--====================================================================================================================================-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <!--====================================================================================================================================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
