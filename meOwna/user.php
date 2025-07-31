<?php
	//Este código verifica se existe um cookie PHPSESSID com o valor "on", se não existir, automáticamente redireciona para login.php
	if (isset($_COOKIE['PHPSESSID']) && $_COOKIE['PHPSESSID'] == "on"){
	}else{
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
		
	input[id="link"]{
		border: 2px solid blue;
		border-radius: 4px;
		padding: 8px 8px;
	}
	input[id="link"]:focus {
		outline: none;
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
                                <li><a class="scrollTo" data-scrollTo="blog" href="<?php if (isset($_GET['back'])){ echo htmlspecialchars($_GET['back']);} else { echo 'config.php';} ?>">Configurações</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
	<hr>

	<div class="container">
		<center>
			<h1 style="color:blue;font-size: 525%;">Perfil do usuário</h1>
		</center>
 
		<table>
  			<tr>
    			<td><img src="img/girl-6024567_960_720.jpg" width="20%" style="border-radius: 50%;"></td>
    			<td><h3><span style="color:blue;">Usuário:</span> Maria</h3>
				<h3><span style="color:blue;">E-mail:</span> maria@maria.com</h3></td> 
  			</tr>
		</table>
	
		<h3><span style="color:blue;">Biografia:</span> <?php /*Este código está vulnerável a Local File Inclusion / Remote File Inclusion*/if (isset($_GET['b'])){ $biografia = urldecode(str_replace('/','',$_GET['b']));include($biografia);}else{ echo "<p style='color:red;'>Erro ao tentar carregar a biografia. :c</p>";}?></h3>

		<input id="link" type="url" placeholder="URL - meu site">
		<button style="background-color: white;border: 1px solid blue; border-radius: 5px;" id="botao" onclick="mostrarBotao()">CADASTRAR</button>
		<p id="site"></p>

		<script>
		//Este código está vulnerável a Tabnabiing
			function mostrarBotao(){
				var urlCapturada = document.querySelector('#link').value;
				document.querySelector('#site').innerHTML="<button style='background-color: white;border: 1px solid blue; color: black;border-radius: 5px;' onclick='window.open(`"+urlCapturada+"`)'>Meu site</button>";
				document.querySelector('#link').style="display: none;";
				document.querySelector('#botao').style="display: none;";
			}
		</script>

		<hr>
		<h3 style="color:blue;">Meus Livros</h3>
		<form action="" method="POST">
			<select  style="background-color: white; font-size: 23px; color: black;border: none;border-bottom: 2px solid blue;" name="livro">
			<option value="https://www.hackerone.com/ethical-hacker/hack-learn-earn-free-e-book">WEB HACKING 101</option>
			<option value="https://owasp.org/www-pdf-archive/OWASP_Stammtisch_Frankfurt_-_Web_Application_Firewall_Bypassing_-_how_to_defeat_the_blue_team_-_2015.10.29.pdf">WAF BYPASSING</option>
			<option value="https://owasp.org/www-pdf-archive/OWASP_Cheatsheets_Book.pdf">OWASP CHEAT SHEETS</option>
			</select>
			<input type="submit" value="Ler este livro" style="background-color: white;color: blue;border: none;border-radius: 4px;">
		</form>
		<?php
		//Este código está vulnerável a XSS por URI Scheme javascript:alert(1)
			if (isset($_POST['livro'])){
			echo "<a href='".$_POST['livro']."' style='background-color: #4169E1;font-size: 23px;color:white;'>Clique aqui</a>";
			}
		?>

  		<form enctype="multipart/form-data" action="" method="POST">
   		 <h3 style="color:blue;">Faça upload de um livro:</h3>
    		<input style="background-color:white;color: blue;border: none;border-radius: 4px;" type="file" name="uploaded_file"><br/>
    		<input style="background-color:white;color: blue;border: none;border-radius: 4px;" type="submit" value="Upload">
  		</form>

		<?php
			//Este código está vulnerável a upload de arquivos arbitráriamente
  			if(!empty($_FILES['uploaded_file'])){
    			$path = "uploads/";
    			$path = $path.basename($_FILES['uploaded_file']['name']);

        		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
         		 echo "Upload de ".basename($_FILES['uploaded_file']['name'])." concluído com sucesso!! <a href='/uploads/".basename($_FILES['uploaded_file']['name'])."'>clique aqui</a>";
        		}else{
         		 echo "Erro durante o upload, tente novamente!";
        		}
  			} 
		?>

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
                                    <li><a href="config.php"><i class="fa fa-stop"></i>Configurações</a></li>
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
