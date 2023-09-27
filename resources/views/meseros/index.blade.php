<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>EL PESCADO PASTRULLERO</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/bootstrap.min.css') }}"/>

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/metisMenu.min.css') }}"/>

        <!-- Timeline CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/timeline.css') }}"/>

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/startmin.css') }}"/>

        <!-- Morris Charts CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/morris.css') }}"/>

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://c
        dnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
   
</head>
<body>
          <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="color: #f5f5f5;">
                <div class="navbar-header">
                    <a class="navbar-brand">PESCADO PATRULLERO</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="/copy_paste_software/public/home"><i class="fa fa-home fa-fw"></i>HOME</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">

                            <li class="divider"></li>
                            <li>
                                <a href=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">


            <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">ELIGE UNA OPCION</h1>
                        </div>

                    </div>
                    <!-- /.row -->
                    <div class="row">
                        @foreach($usuarios_mesero as $mesero)
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="#" onclick="llm({{$mesero->nombre_completo}})" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$mesero->nombre_completo}}</div>
                                            <div>Registros de Ventas!!!</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
<!-- Nueva Aduana -->
<div class="modal_mesero" id="modalMeseroAd" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        
          <small id="titulo" class="text-muted">Agregar Alimento</small>
        
      </div>
      <div class="divider"></div> 
      <div class="modal-body">
        <form id="FormAgregarUsuario">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nombre Completo:</label>
            <input value="" type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo" id="nombre_completo" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Login:</label>
            <input type="text" class="form-control" placeholder="usuario" name="login" id="login" required>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tipo:</label>
                <select class="form-control" name ="tipo" id="tipo_usuario">
                 <option value="1">Administrador</option>
                  <option value="2">Cajero</option>
                  <option value="3">Mesero</option>
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="divider"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="GuardarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>





                    </div>
           

                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- /.sidebar -->

            <!-- /#page-wrapper -->

        </div>
 
    <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    toastr.success('¡Bienvenido/a!');
});

$( "#addmesero" ).on( "click", function() {
   $("#modalMeseroAd").modal("show"); 
} );

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>


        <!-- jQuery -->
        <script src="{{ asset('js/login/jquery.min.js') }}"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/login/bootstrap.min.js') }}"></script>
      

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/login/metisMenu.min.js') }}"></script>


        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('js/login/raphael.min.js') }}"></script>
        <script src="{{ asset('js/login/morris.min.js') }}"></script>
        <script src="{{ asset('js/login/morris-data.js') }}"></script>


        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/login/startmin.js') }}"></script>
  
</body>
</html>
