<?php
	//Abaixo é configurado o header CSP, ele faz o bloqueio de javascript
	header("Content-Security-Policy: script-src 'self';");
	if (isset($_COOKIE['PHPSESSID']) && $_COOKIE['PHPSESSID'] == "on"){
	}else {
		header('Location: login.php');
	}
?>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.js"></script>

<!--
	Venue Template
	http://www.templatemo.com/tm-522-venue
-->
	 <style>
	 
	 body{
			padding-left: 25px;	
			padding-right: 25px; 
	 }
		input[name="usuarioLinkedin"]{
					font-family: Arial;
				   background-color: #0000FF;
  					border: none;
  					color: white;
  					padding: 16px 32px;
  					text-align: center;
  					font-size: 16px;
  					margin: 4px 2px;
  					opacity: 0.6;
  					transition: 0.3s;
  					display: inline-block;
  					text-decoration: none;
  					cursor: pointer;		
		}
		input[name="usuarioLinkedin"]:hover {
					opacity: 1		
		}


		
		
		button[name="excluirConta"]{
					font-family: Arial;
				   background-color: #8B0000;
  					border: none;
  					color: white;
  					padding: 9px 18px;
  					text-align: center;
  					font-size: 16px;
  					margin: 4px 2px;
  					opacity: 0.6;
  					transition: 0.3s;
  					display: inline-block;
  					text-decoration: none;
  					cursor: pointer;		
  					border-radius: 10px;
		}
		button[name="excluirConta"]:hover {
					opacity: 1		
					
		}		
		
		
		button[name="visitarLinkedin"] {
				   background-color: white;
  					color: black;
  					border: 2px solid #0000FF;
  					border-radius: 10px;
		}
		
				.botaoAzul {
					font-family: Arial;
				   background-color: #0000FF;
  					border: none;
  					color: white;
  					padding: 16px 32px;
  					text-align: center;
  					font-size: 16px;
  					margin: 4px 2px;
  					opacity: 0.6;
  					transition: 0.3s;
  					display: inline-block;
  					text-decoration: none;
  					cursor: pointer;		
		}
		.botaoAzul:hover {
					opacity: 1		
		}	
		#user{
			text-align: center;		
		}
	 </style>
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
                                    <ul class="sub-menu">
                                        <li><a href="#">Para estudar</a>
                                            <ul class="sub-menu">
                                                <li><a href="https://formminghackers.com">Formming Hackers</a></li>
                                                <li><a href="https://owasp.org/">OWASP</a></li>
                                                <li><a href="https://cwe.mitre.org/">CWE</a></li>
                                                <li><a href="https://defcon.org/">DEFCON</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="user.php?back=config.php&b=bio.txt">usuário</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
	<hr>

	<div class="container">
		<div id="user">
		<h1 style="color:blue;font-size: 525%;">Configurações do usuário</h1>
		</div>
		<table>
  			<tr>
    			<td><img src="img/girl-6024567_960_720.jpg" width="20%" style="border-radius: 50%;"></td>
    			<td> <h3><span style="color:blue;">Usuário:</span> Maria</h3>
						<h3><span style="color:blue;">E-mail:</span> maria@maria.com</h3>
				</td> 
  			</tr>
 
		</table>

		<form method="POST" action="">
			<h3>
				<span style="color:blue;">Confirme sua chave de API: </span>
				<input type="text" name="apiKey" placeholder="Ex: Y2hhdmUxMjM0NTY3ODkK">
			</h3>
			<input type="submit" class="botaoAzul" value="Confirmar" name="chaveAPI">
		</form>


		<?php
		//Aqui temos o contexto de HTML Injection por decodificação base64
			if (isset($_POST['apiKey'])){
			echo "<span style='color:blue;'>Sua chave API decodificada: </span>".base64_decode($_POST['apiKey']);
			}
		?>

		<form method="POST" action="dados.php">
		<!--Aqui é feita uma requisição HTTP POST para o arquivo dados.php que faz o download do arquivo JSON com dados do usuário.-->
			<button type="submit" class="botaoAzul" value="users/user-5397.json" name="dados">Meus dados</button>
		</form>
		
		<div style="text-align: left;">
			<hr>
			<form action="" method="POST">
				<button type="submit" value="true" name="excluirConta">Excluir minha conta</button>
			</form>
		<?php
		//Uma simulação para CSRF com contexto de exclusão de conta.
			if (isset($_POST['excluirConta'])){
				echo "<h3 style='color:red;'>Você excluiu sua conta!!</h3>";
			}
		?>
		</div>
	</div>





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
                                    <li><a href="user.php?back=config.php&b=bio.txt"><i class="fa fa-stop"></i>usuario</a></li>
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
