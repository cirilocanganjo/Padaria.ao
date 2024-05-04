<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" Goufram="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>criar a sua conta</title>
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
                


                <div class="col-md-10 card container  text-dark" style="background-color: #fff">

              
                <div class= "text-center   mt-3 p-3">
                    <h4 class="text-uppercase">dados pessoais!</h4>
                </div>

               

                <form action="/conta/criada" method="post">
                @csrf
                    <div class="card-body d-flex">
                         
                        <!-- Div-Principal-1 -->
                        <div class="div-principal-1 col-md-6">

                            <div class="form-group mt-3">
                                <label class="form-label" for="">Nome:</label>
                                <input placeholder="Digite o seu nome completo" class="form-control" type="text" name="nome" value="{{ old('nome') }}"> 
                                @error('nome')<span class="text-danger">{{ $message }}</span> @enderror                                 
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label" for="">E-mail:</label>
                                <input placeholder="Digite o seu e-mail" class="form-control" type="email" name="email" value="{{ old('email') }}"> 
                                @error('email')<span class="text-danger">{{ $message }}</span> @enderror                                 

                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label" for="">Telefone:</label>
                                <input placeholder="número de telefone " class="form-control" type="tel" name="telefone" value="{{ old('telefone') }}"> 
                                @error('telefone')<span class="text-danger">{{ $message }}</span> @enderror                                 

                            </div>

                             <!-- Botão -->
                             <div class="form-grup mt-3">  
                                <input class="btn text-light" type="submit" value="Salvar" style="background-color: #fb5849">                                   
    
                            </div>

                            <!-- Fim Botão -->
                            
                        </div>
                        <!-- Fim Div-Principal-1 -->
                        
                        <!-- Div-Principal-2 -->
                        <div class="div-principal-2 col-md-6">

                            <div class="form-grup mt-3">  
                                <label class="form-label" for="">Data de nascimento:</label>
                                <input  class="form-control" type="date"   name="data_nascimento" /> 
                                @error('data_nascimento')<span class="text-danger">{{ $message }}</span> @enderror                                 
                                <!-- Apresentação da Messangem de erro  -->
                                @if(session("wrongDate"))
                                    <span class='text-danger'>{{session("wrongDate")}}</span>
                                @endif
                                <!-- Apresentação da Messangem de erro  -->

    
                            </div>
                            
                            <div class="form-grup mt-3">  
                                <label class="form-label" for="">Palavra-passe:</label>
                                <input placeholder="Digite a sua palavra-passe" class="form-control" type="password" name="password" value="{{ old('password') }}">                                   
                                @error('password')<span class="text-danger">{{ $message }}</span> @enderror                               
                                
                            </div>
                            
                            <div class="form-grup mt-3">  
                                <label class="form-label" for="">Confirmar palavra-passe:</label>
                                <input placeholder="Confirmar palavra-passe" class="form-control" type="password" name="confirmar_password" value="{{ old('confirmar_password') }}">                                   
                                @error('confirmar_password')<span class="text-danger">{{ $message }}</span> @enderror                               
                                
                            </div>

                            <!-- Atributos ocultos tanto do Admin como do Cliente -->
                                <input type="hidden" name="cliente" value="1">
                                <input type="hidden" name="administrador" value="0">
                            <!-- Fim Atributos ocultos tanto do Admin como do Cliente -->
                            
                           

                        </div>
                        <!-- Fim Div-Principal-1 -->


                    </div>

                </form>
                                      
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


</body>
</html>