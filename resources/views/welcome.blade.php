<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Travesuras Infantiles</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="css/fonticons.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="js/jquery-1.10.2.min.scroll.js" type="text/javascript"></script>
    <script>$(function() { $.scrollIt(); });</script>
    <script src="js/scrollIt.js" type="text/javascript"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<!--Home page style-->
<header id="main_menu" class="header">
    <div class="main_menu_bg navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="nave_menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav">
                                    <li><a href="#inicio" data-scroll-nav='1'>Inicio</a></li>
                                    <li><a href="#queofrecemos" data-scroll-nav='2'>¿Que ofrecemos?</a></li>
                                    <li><a href="#nuestrotrabajo" data-scroll-nav='3'>Nuestro trabajos</a></li>
                                    <li><a href="#combos" data-scroll-nav='4'>Combos</a></li>
                                    <li><a href="#contactos" data-scroll-nav='5'>Contactos</a></li>
                                    <li><a href="{{asset('')}}admin" >Usuarios</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>

    </div>
</header> <!--End of header -->



<section id="inicio" class="home"  data-scroll-index='1'>
    <div class="home_overlay home-carucel">
        <div class="container">
            <div class="row">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-caption">
                                <p>Disponemos de un salon amplio</p>

                            </div>
                            <img src="images/img1.jpg" alt="...">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <p>Poseemos muchos temas para fiestas</p>

                            </div>
                            <img src="images/img2.jpg" alt="...">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <p>Hay un pelotero increible</p>

                            </div>
                            <img src="images/pelotero.jpg" alt="...">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <p>Tambien para los mas chiquitos</p>
                            </div>
                            <img src="images/pelotero2.jpg" alt="...">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <p>Tenemos un espacio para los padres</p>
                            </div>
                            <img src="images/papas.jpg" alt="...">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End of Banner Section -->




<section id="queofrecemos" class="whatido"  data-scroll-index='2'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="head_title text-center wow fadeInLeft"  data-wow-duration="3s">
                    <h2>¿Que ofrecemos?</h2>
                    <div class="separator"></div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="head_title_rigth wow fadeInRight"  data-wow-duration="3s">
                    <p>Realizamos fiestas personalizadas para su niño, contamos con todo lo necesario. Solo necesitamos tu idea de fiesta infantil y la hacemos realidad.</p>
                </div>
            </div><!-- End of col-sm-5 -->

            <div class="main_whatido_content text-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_whatido wow fadeInDown"  data-wow-duration="1s">
                        <div class="single_whatido_img_globo">
                            <img src="images/globos1.png" alt="" />
                        </div>
                        <h3>Fiesta</h3>
                        <p>Ofrecemos una amplia gama de temas para festejar la fiesta soñada de su hijo ya sea pelotero y servicio de caterin. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_whatido wow fadeInDown"  data-wow-duration="3s">
                        <div class="single_whatido_img">
                            <img src="images/foto.png" alt="" />
                        </div>
                        <h3>Servicio de fotos</h3>
                        <p>Contamos con la mejor calidad para inmortalizar la fiesta de su hijo. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_whatido wow fadeInDown"  data-wow-duration="4s">
                        <div class="single_whatido_img">
                            <img src="images/video.png" alt="" />
                        </div>
                        <h3>Servicio de video</h3>
                        <p>Si usted lo desea tenemos un servicio de video para no perder ningun momento de ese dia. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End of Features Section -->

<section id="nuestrotrabajo" class="myworks"  data-scroll-index='3'>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center wow fadeInLeft"  data-wow-duration="2s">
                    <h2>Nuestro trabajos</h2>
                    <div class="separator"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="main_myworks_content text-center">
        <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="1.5s">
            <div class="single_work">
                <img src="images/cumpleaños1.jpg" alt="" />
            </div>
        </div>
        <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
            <div class="single_work">
                <img src="images/cumpleaños2.jpg" alt="" />
            </div>
        </div>
        <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="3s">
            <div class="single_work">
                <img src="images/cumpleaños3.jpg" alt="" />
            </div>
        </div>
        <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="4s">
            <div class="single_work">
                <img src="images/cumpleaños4.jpg" alt="" />
            </div>
        </div>

        <div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
            <a href="" class="btn">Mas fotos</a>
        </div>
    </div>
</section><!-- End of Features Section -->



<section id="combos" class="about"  data-scroll-index='4'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                <div class="head_title text-center">
                    <h2>Combos!</h2>
                    <div class="separator"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
                <div class="head_title_rigth">
                    <p>Contamos con estos combos para ofrecerte.</p>
                </div>
            </div>
            <div class="main_about_content text-center">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="1.5s">
                    <div class="single_about">
                        <div class="single_about_img_combo">
                            <img src="images/combo1.png" alt="" />
                        </div>
                        <h3><span class="statistic-counter">30.25</span></h3><h3>Combo 1</h3>
                        <p>info combo 1</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                    <div class="single_about">
                        <div class="single_about_img_combo ">
                            <img src="images/combo2.png" alt="" />
                        </div>
                        <h3><span class="statistic-counter">20.75</span>Combo 2</h3>
                        <p>info combo2</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="3s">
                    <div class="single_about">
                        <div class="single_about_img_combo">
                            <img src="images/combo3.png" alt="" />
                        </div>
                        <h3><span class="statistic-counter">15.20</span>Combo 3</h3>
                        <p>info combo 3 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End of Features Section -->







<section id="contactos" class="contact contac_custon" data-scroll-index='5'>
    <div class="container">
        <div class="row">
            <div class="main_contact">

                <div class="contact_content">

                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                        <div class="contact_message">
                            <div class="head_title text-center">
                                <h2>Contactos!</h2>
                                <div class="separator"></div>
                            </div>
                            <form action="#" id="formid">
                                <label for="">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre" required="">
                                </div>

                                <label for="">Email</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                </div>

                                <label for="">Mensaje</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="8" placeholder="Mensaje"></textarea>
                                </div>

                                <div class="message_btn text-center">
                                    <div class="btn_bg">
                                        <a href="" class="btn">Enviar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
                        <div class="contact_socail_bookmark_area">

                            <div class="contact_adress">
                                <h3>Direccion:</h3>
                                <span>9 de Julio al 100,</span>
                                <span>Cacho, Resistencia</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single_contact_phone">
                                        <h3>Telefono:</h3>
                                        <span>+543624592345</span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single_contact_phone">
                                        <h3>Email:</h3>
                                        <span>travesurasinfantiles@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_socail_bookmark">
                                <h3>Buscanos en:</h3>
                                <a href="www.facebook.com"><i class="fa fa-facebook-official" style="font-size:48px;color:white"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="footer_copyright">

                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown"  data-wow-duration="3s">
                    <div class="single_copyirgth text-left">
                        <p>Copyright 2017 &copy; by MPSoluciones</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single_copyirgth wow fadeInUp"  data-wow-duration="2s">
                        <ul class="navbar-right">
                            <li><a href="#inicio" data-scroll-nav='1'>Inicio</a></li>
                            <li><a href="#queofrecemos" data-scroll-nav='2'>¿Que ofrecemos?</a></li>
                            <li><a href="#nuestrotrabajo" data-scroll-nav='3'>Nuestro trabajos</a></li>
                            <li><a href="#combos" data-scroll-nav='4'>Combos</a></li>
                            <li><a href="#contactos" data-scroll-nav='5'>Contactos</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End of contact With Map Section -->









<!-- STRAT SCROLL TO TOP -->

<div class="scrollup">
    <a href="#" data-scroll-nav='1' ><i class="fa fa-chevron-up"></i></a>
</div>

<!-- <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>-->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/isotope.min.js"></script>

<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>


<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
