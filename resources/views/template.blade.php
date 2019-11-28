
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Cleriston Advogados Associados</title>
<!-- Bootstrap -->
<link href="{{url('/')}}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Estilo do Modal -->
<link rel="stylesheet" href="{{url('/')}}/css/associados.css" rel="stylesheet">
<link href="{{url('/')}}/css/modal.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--<link href="{{url('/')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
<!-- Linear icons CSS-->
<link href="{{url('/')}}/assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<!-- magnific Css -->
<link href="{{url('/')}}/assets/css/magnific-popup.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="{{url('/')}}/assets/animate/animate.css" rel="stylesheet">
<link href="{{url('/')}}/assets/fonts/fontawesome-webfont.svg@v=4.7.0" rel="stylesheet">
<link href="{{url('/')}}/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
<!-- Owl Carousel -->
<link href="{{url('/')}}/assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="{{url('/')}}/assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<!-- Custom CSS -->
<!--PRINCIPAL PRINCIPAL PRINCIPAL PRINCIAPAL PRINCIPAL PRINCIPAL--->
<!--PRINCIPAL PRINCIPAL PRINCIPAL PRINCIAPAL PRINCIPAL PRINCIPAL--->
<!--PRINCIPAL PRINCIPAL PRINCIPAL PRINCIAPAL PRINCIPAL PRINCIPAL--->
<link href="{{url('/')}}/css/style.css" rel="stylesheet">
<!--PRINCIPAL PRINCIPAL PRINCIPAL PRINCIAPAL PRINCIPAL PRINCIPAL--->
<!-- Favicon -->
<!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="logo-wrapper"> 
    <!-- Logo -->
    <div class="container">
      <div class="row"> 
        <!-- Logo -->
        <div class="col-sm-6 col-md-2 col-lg-2 hidden-xs"> <a href="{{url('/')}}"><img src="{{url('/')}}/images/logo2.png" alt="Barrister"/></a> </div>
        <!-- search and book us btn 
        <div class="col-sm-6 col-md-4 col-lg-3 pull-right hidden-xs">
          <div class="search"><i class="fa fa-search" aria-hidden="true"></i>
            <div id="search-form-container">
              <form id="search-form" action="#" style="" class="open">
                <input id="search" name="search" placeholder="Search..." type="search">
                <input id="search-submit" value="" type="submit">
                <span id="close-form" class="close">x</span>
              </form>
            </div>
          </div>
          <div class="book-us hidden-xs"> <a href="#">Call Us : +012 345 6789</a></div>
        </div>
      -->
        <!-- Navigation -->
        <div class="col-sm-12 col-md-6 col-lg-7">
          <nav class="navbar navbar-default pull-right"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.html"><img src="images/logo2.png" alt="Barrister"/></a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Início</a></li>
                <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Sobre Nós</a></li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-scroll-nav="2">Páginas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/contato')}}" data-scroll-nav="3">Sobre Nós</a></li>
                    <li><a href="faq.html" data-scroll-nav="4">FAQ</a></li>
                    <li><a href="our-team.html" data-scroll-nav="5">Equipe</a></li>
                    <li><a href="gallery.html" data-scroll-nav="6">Galeria</a></li>
                    <li><a href="404.html" data-scroll-nav="7">404</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="services.html">Serviços</a></li>
                    <li><a href="service-details.html">Detalhes de Serviço</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
                <!--:::::::: Modal De Login :::::::::::: -->
                <!-- <li><a href="myModal" data-toggle="modal">Login</a></li> -->
                <!-- Aqui por enquanto o modal está sendo substituído pelo painel do AdminLTE -->
                <li><a href="{{url('/home')}}">Login</a></li>
                <li><a href="{{url('/contato')}}">Contatos</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- :::::::::::::::::::::::::::: Código do Modal   :::::::::::::::::::::::::::::::::::::::: -->

    <div id="myModal" class="modal fade text-center">
        <div class="modal-dialog">
            <div class="col-lg-8 col-sm-8 col-12 main-section">
                <div class="modal-content">
                    <div class="col-lg-12 col-sm-12 col-12 user-img">
                        <img src="{{url('/')}}/images/logo2.png">
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12 user-name">
                        <h1>Fazer Login</h1>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12 consultaiton-form">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-one">Logar</button>
                        </form>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12 link-part">
                        <a href="http://www.nicesnippets.com" target="_blank">Esqueceu a Senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

@yield('content')
@yield('contato')
@yield('informativo')


<!-- Barrister Footer Wrapper Start -->
<div class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4"> <img src="{{url('/')}}/images/logo2.png" alt="" data-popupalt-original-title="null" title="">
        <p>O bem que praticas em qualquer lugar será teu advogado em toda parte. <a style="font-size: 12px; font-family:verdana; font-style: italic; font-color: white" >Emmanuel</a></p>
        <ul class="social-icons">
          <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"> <i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="bullet-section">
          <h2><img src="{{url('/')}}/images/link-icon.png" alt=""/>LINKS RELACIONADOS</h2>
          <p>Se você preferir, poderá consultar um portal externo para verificar algum processo em andamento:</p>
          <ul >
            <li><a href="www.mpap.mp.br">Ministério Público do Amapá</a></li>
            <li><a href="http://tucujuris.tjap.jus.br/tucujuris/pages/consultar-processo/">Portal Tucujuris</a></li>
            <li><a href="https://www.jusbrasil.com.br/">Consulta JusBrasil</a></li>
            <li><a href="www.stf.jus.br/">Supremo Tribunal Federal</a></li>
            <li><a href="www.stj.jus.br/">Superior Tribunal de Justiça</a></li>
            <li><a href="https://www.stm.jus.br/">Superior Tribunal Militar</a></li>
          </ul>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Barrister Footer Wrapper end --> 
<!-- Copyright Start -->
<div class="copyright-wrapper">
  <div class="container">
    <p>&copy; Linformática <script> var data = new Date();document.write(data.getFullYear())</script>, Cleriston Vilhena Advogados  | Todos os Direitos Reservados.</p>
  </div>
</div>
<!-- Copyright styles End getYear()--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{url('/')}}/assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="{{url('/')}}/assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="{{url('/')}}/assets/jquery/plugins.js"></script> 
<script src="{{url('/')}}/assets/jquery/slider.js"></script> 
<script src="{{url('/')}}/assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="{{url('/')}}/assets/jquery/jquery.magnific-popup.min.js"></script> 
<script src="{{url('/')}}/assets/wow/wow.min.js"></script> 
<script src="{{url('/')}}/js/custom.js"></script>

  <!-- jQuery -->
        <script src="{{url('/')}}/js/jquery-3.0.0.min.js"></script>
        <script src="{{url('/')}}/js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="{{url('/')}}/js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>

        <!-- scrollIt -->
        <script src="{{url('/')}}/js/scrollIt.min.js"></script>

        <!-- jquery.waypoints.min -->
        <script src="{{url('/')}}/js/jquery.waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="{{url('/')}}/js/owl.carousel.min.js"></script>

        <!-- jquery.magnific-popup js -->
        <script src="{{url('/')}}/js/jquery.magnific-popup.min.js"></script>

        <!-- stellar js -->
        <script src="{{url('/')}}/js/jquery.stellar.min.js"></script>

        <!-- isotope.pkgd.min js -->
        <script src="{{url('/')}}/js/isotope.pkgd.min.js"></script>

        <!-- YouTubePopUp.jquery -->
        <script src="{{url('/')}}/js/YouTubePopUp.jquery.js"></script>

        <!-- validator js -->
        <script src="{{url('/')}}/js/validator.js"></script>

        <!-- custom scripts -->
        <script src="{{url('/')}}/js/scripts.js"></script>
        <script type="text/javascript">
        (function () {
        var options = {
            whatsapp: "+55(96)99108-1212", // WhatsApp number
            call_to_action: "Fale Conosco Agora!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>


</body>
</html>