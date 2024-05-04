<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" Goufram="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>entrar</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    </head>


<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="log">
                            <img src="{{ asset('assets/images/log.png') }}" align="sistema de venda caçarola" width="170" height="75">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Casa</a></li>
                            <li class="scroll-to-section"><a href="#about">Sobre a Padaria</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Padeiros</a></li> 
                            {{-- <li class="submenu">
                                <a href="javascript:;">Faturas</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contactos</a></li> 
                            <li class="scroll-to-section"><a href="/usuario/entrar">Entrar</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>



    <section class="section" id="reservation">
        <div class="container ">
            <div class="row">                 


                <div class="col-md-6 card container d-flex flex-direction-column align-items-center  text-dark" style="background-color: #fff">
                    
                    <div class="card-body col-md-10 ">

                        <form action="/usuario/autenticar" method="post">
                         @csrf   


                        <div class="text-center mb-4 text-uppercase">
                            <h2>Autentique-se aqui!</h2>
                        </div>

                        
                <!-- Apresentação de mensagens de Alerta -->
                    @if(Session::has('alerta'))     
                        <div class="alert alert-success text-center container mt-4 col-md-12">{{ Session::get('alerta') }} </div>                
                    @endif    
           
                <!-- Fim Apresentação de mensagens de Alerta -->


                <!-- Apresentação de mensagens de Alerta -->
                    @if(Session::has('erro'))     
                        <div class="alert alert-danger text-center container mt-4 col-md-12">{{ Session::get('erro') }} </div>                
                    @endif    
           
                <!-- Fim Apresentação de mensagens de Alerta -->
                        

                        <div class="form-group">
                            <label class="form-label" for="">Email:</label>
                            <input class="form-control" placeholder="Digite o seu e-mail" type="text" name="email" value="{{ old('email') }}">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="">Palavra-passe:</label>
                            <input class="form-control" placeholder="Digite a sua palavra-passe " type="password" name="password" value="{{ old('password') }}">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            
                        </div>
                        <div class="m-1">
                            <span>Ainda não tem uma conta? <a href="/criar/conta">clique aqui para criar</a> </span>
                        </div>
                        <!-- Botão-->
                        <div class="form-group">
                            <input class="btn btn-block text-white" type="submit"  value="Entrar"  style="background-color: #fb5849">
                        </div>
                        <!-- Fim Botão-->

                        </form>


                    </div>                   
                </div>
                    
                </div>


            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Padaria caçarola.
                        
                        <br>Design: Goufram</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/slick.js') }}"></script> 
    <script src="{{ asset('assets/js/lightbox.js') }}"></script> 
    <script src="{{ asset('assets/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    
    <script> 
            $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

    <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>