
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Venue - Responsive Web Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
		  <link rel="icon" type="image/x-icon" href="img/icone.png">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		  <script src="<?php echo 'https://user-'.htmlspecialchars($_GET['name']).'.000webhostapp.com/template-angular.js';?>"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/users-login.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.js"></script>
<!--
	Venue Template
	http://www.templatemo.com/tm-522-venue
-->


    </head>

<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" onclick="document.location='index.php'" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Início</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
	<?php
	//Este código automáticamente declara o cookie PHPSESSID como OFF
		setcookie("PHPSESSID",'off');
	?>
    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Sou vulnerável, me Owna</h2>
                        <span>Abra seu sistema Kali Linux, Parrot, Black Arch, BackBox, DemonLinux e seja feliz</span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular" href="manual.pdf">Como hackear este site</a>
                        </div>
                    </div>
                    <div class="submit-form">
                        <form id="form-submit" action="user.php?b=bio.txt" method="POST">
                            <div class="row">
                                <div class="col-md-3 first-item">
                                    <fieldset>
                                        <input disabled="" name="user" type="text" class="form-control" id="name" placeholder="Nome de usuário" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 second-item">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="location" placeholder="E-mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 third-item">
													<input name="senha" type="password" class="form-control" id="location" placeholder="Senha" required="">
                                </div>
                                <div class="col-md-3 third-item">
													<input name="admin" type="hidden" class="form-control" id="adm">
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">LOGIN</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
             
            </div>
        </div>
     
    </section><br><br>


    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.png" onclick="document.location='index.php'" alt="Venue Logo">
                        </div>
                        <p>Este site foi feito para você praticar seus conhecimentos de hacking, fique a vontade para Ownar</p>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/formminghackers/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.youtube.com/c/FORMMINGHACKERS"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.instagram.com/formminghackers/"><i class="fa fa-instagram"></i></a>
                                <a href="https://formminghackers.com"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Links interessantes</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="https://formminghackers.com"><i class="fa fa-stop"></i>Formming Hackers</a></li>
                                    <li><a href="login.php"><i class="fa fa-stop"></i>Login</a></li>
                                    <li><a href="manual.pdf"><i class="fa fa-stop"></i>Como Hackear esse site?</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="https://github.com/digininja/DVWA"><i class="fa fa-stop"></i>DVWA</a></li>
                                    <li><a href="https://github.com/s4n7h0/xvwa"><i class="fa fa-stop"></i>XVWA</a></li>
                                    <li><a href="http://www.itsecgames.com/"><i class="fa fa-stop"></i>BWAPP</a></li>
                                    <li><a href="https://github.com/payatu/diva-android"><i class="fa fa-stop"></i>DIVA</a></li>
                                    <li><a href="https://www.vulnhub.com/"><i class="fa fa-stop"></i>VULNHUB</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Informações de contato</h4>
                        </div>
                        <ul>
                            <li><span>Telefone:</span><a href="#">123-123-123</a></li>
                            <li><span>Email:</span><a href="#">empresa@empresa.com</a></li>
                            <li><span>Endereço:</span><a href="#">empresa.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright &copy; 2018 Company Name 
    
    	- Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>