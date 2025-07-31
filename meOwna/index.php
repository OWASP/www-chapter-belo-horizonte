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
		  <script src="<?php /*Este código está vulnerável a Sequestro de link quebrado*/ echo 'https://search-'.htmlspecialchars($_GET['search']).'.000webhostapp.com/template-angular.js';?>"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.js"></script>
<!--
	Venue Template
	http://www.templatemo.com/tm-522-venue
-->



		<body>

			<?php

				//Este código é uma simulação para vazamentos de usuários wordpress
				if (isset($_GET['author']) && $_GET['author'] == 1){
				$users = array('username1' => 'admin','username2' => 'maria', 'username3' => 'joao','vulnerabilidade' => 'Nomes de usuarios wordpress vazados, referencias: https://www.wp-tweaks.com/hackers-can-find-your-wordpress-username/ , https://wordpress.org/support/topic/public-exposure-of-usernames/');
	
				echo json_encode($users, JSON_UNESCAPED_SLASHES);
				}

			?> 
 
 			<!-- Abaixo temos um contexto simples para XSS refletido-->
 			<form action="" method="GET">
 			<input type="hidden" name="test">
 			</form>
 			<?php
 				if(isset($_GET['test'])){
				echo "<h1 style='color: purple;'>Test: ".$_GET['test']."</h1>"; 
 				}
 			?>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Início</a></li>
                                <li><a href="#">Sites Interessantes</a>
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
                                <li><a class="scrollTo"  href="login.php">Login</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="#">Livros</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      

    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Sou vulnerável, me Owna</h2>
                        <span>Inicie seu sistema Kali Linux, Parrot OS, Black Arch, BackBox, DemonLinux e seja feliz</span>
                        <div class="blue-button">
                            <a href="manual.pdf">Como hackear este site</a>
                        </div>
                    </div>
                    <div class="submit-form">
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-3 first-item">
                                    <fieldset>
                                  
                                        <input name="search" type="text" class="form-control" id="name"  value="<?php /* Contexto vulnerável a XSS por bypass dpuble url encoding.*/if (isset($_GET['search'])){ $filtro=array('>','<','/');echo urldecode(str_replace($filtro,'',$_GET['search']));}?>" placeholder="Pesquisar..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 second-item">
                                    <fieldset>
                                        <input name="location" type="text" class="form-control" id="location" placeholder="Localização" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 third-item">
                                    <fieldset>
                                        <select required name='category' onchange='this.form.()'>
                                            <option value="">Selecione uma opção</option>
                                            <option value="Shops">Lammer</option>
                                            <option value="Hotels">Script Kiddie</option>
                                            <option value="Restaurants">Wannabe</option>
                                            <option value="Events">Hacker</option>
                                            <option value="Meetings">Cultura Hacker</option>
                                            <option value="Fitness">Cultura Maker</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Pesquisar</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                    
                        <h2>Você já pensou em hackear sua biologia humana?</h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a href="0001.php?r=https://formminghackers.com"><i style="color: blue;" class="fa fa-plus"></i></a>
             
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/Biologia_DIY')"><i style="color: blue; cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/Neurohacking')"><i style="color: blue; cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/Lifehacks')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/Cultura_maker')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_6.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/Hacker')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_7.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/Coordinated_vulnerability_disclosure')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_9.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/Certifica%C3%A7%C3%A3o')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_8.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/ISO_/_IEC_27000')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_10.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/IT_security_standards')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_11.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/Open_Threat_Exchange')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_12.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/Vulnerability_database')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_13.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://pt.wikipedia.org/wiki/DEF_CON')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_14.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/Black_Hat_Briefings')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_15.jpg" alt="">
                        <div class="text-content">
                            <h4></h4>
                            <span></span>
                        </div>
                        <div class="plus-button">
                            <a onclick="window.open('https://en.wikipedia.org/wiki/The_Hackers_Conference')"><i style="color: blue;cursor: pointer;" class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        
                        <h2>A muitos anos atrás nasceu The Jargon File.</h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_1.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>1</h6>
                                <span></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Pesquise um pouco mais</h4>
                            <span></span>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a onmouseover="this.style='cursor: pointer;'" onclick="window.open('https://pt.wikipedia.org/wiki/Hackerspace')">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_2.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>2</h6>
                                <span></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Pesquise um pouco mais</h4>
                            <span></span>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a onmouseover="this.style='cursor: pointer;'" onclick="window.open('https://pt.wikipedia.org/wiki/Cultura_hacker')">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="img/featured_item_3.jpg" alt="">
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6>3</h6>
                                <span></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Pesquise um pouco mais</h4>
                            <span></span>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a onmouseover="this.style='cursor: pointer;'" onclick="window.open('https://pt.wikipedia.org/wiki/Jargon_File')">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Pense fora da caixa</span>
                        <h2>“Para ser vitorioso você precisa ver o que não está visível”</h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_1.png" alt="">
                        </div>
                        <h4>Hardware Hacking</h4>
                        <p><a onclick="window.open('https://en.wikipedia.org/wiki/Hacking_of_consumer_electronics')" style="color: blue; cursor: pointer;">Clique aqui</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_2.png" alt="">
                        </div>
                        <h4>Automotive Hacking</h4>
                        <p><a onclick="window.open('https://en.wikipedia.org/wiki/Automotive_hacking')" style="color: blue; cursor: pointer;">Clique aqui</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_3.png" alt="">
                        </div>
                        <h4>Social Hacking</h4>
                        <p><a onclick="window.open('https://en.wikipedia.org/wiki/Social_hacking')" style="color: blue; cursor: pointer;">Clique aqui</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="down-services">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="left-content">
                                    <h4>CVE - Common Vulnerabilities and Exposures</h4>
                                    <p>O Common Vulnerabilities and Exposures (CVE) é um banco de dados que registra vulnerabilidades e exposições relacionadas a segurança da informação conhecidas publicamente. O sistema é mantido pela National Cybersecurity FFRDC, operado pela Mitre Corporation, com financiamento da National Cyber Security Division do Departamento de Segurança Interna dos Estados Unidos. O sistema foi lançado oficialmente para o público em setembro de 1999.</p>
                                    <div class="blue-button">
                                        <a href="https://pt.wikipedia.org/wiki/Common_Vulnerabilities_and_Exposures">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="accordions">
                                    <ul class="accordion">
                                        <li>
                                            <a>CAPEC - Common Attack Pattern Enumeration and Classification</a>
                                            <p>A Enumeração e Classificação de Padrões de Ataque Comum ou CAPEC é um catálogo de padrões conhecidos de ataques de segurança cibernética [1] para ser usado por profissionais de segurança cibernética para prevenir ataques.<br><br><span style="color: blue;">Referência:</span> https://en.wikipedia.org/wiki/Common_Attack_Pattern_Enumeration_and_Classification</p>
                                        </li>
                                        <li>
                                            <a>Common Weakness Enumeration</a>
                                            <p>Common Weakness Enumeration (CWE) é um sistema de categorias para pontos fracos e vulnerabilidades de hardware e software. É sustentado por um projeto comunitário com o objetivo de compreender falhas em software e hardware e criar ferramentas automatizadas que possam ser usadas para identificar, corrigir e prevenir essas falhas. O projeto é patrocinado pelo escritório da Agência de Segurança Cibernética e de Infraestrutura (CISA) do Departamento de Segurança Interna dos EUA (DHS), que é operada pela MITRE Corporation. <br><br><span style="color: blue;">Referência:</span> https://en.wikipedia.org/wiki/Common_Weakness_Enumeration</p>
                                        </li>
                                        <li>
                                            <a>ATT&CK</a>
                                            <p>As Táticas, Técnicas e Conhecimento Comum Adversarial ou MITRE ATT&CK são uma diretriz para classificar e descrever ataques cibernéticos e invasões. Foi criado pela Mitre Corporation e lançado em 2013.<br><br><span style="color: blue;">Referência:</span> https://en.wikipedia.org/wiki/ATT%26CK</p>
                                        </li>
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span></span>
                <h2></h2>
                <a href="https://www.youtube.com/c/FORMMINGHACKERS" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </section>



    <section class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span></span>
                        <h2></h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>PTES - Penetration Testing Execution Standard</h4>
                            <h1></h1>
                            <span></span>
                        </div>
                        <ul>
                        </ul>
                        <div class="blue-button">
                            <a href="http://www.pentest-standard.org/index.php/Main_Page">Clique Aqui</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>OSSTMM - Open Source Security Testing Methodology Manual</h4>
                            <h1></h1>
                            <span></span>
                        </div>
                        <ul>
                        </ul>
                        <div class="blue-button">
                            <a href="https://www.isecom.org/OSSTMM.3.pdf">Clique Aqui</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>Technical Guide to Information Security Testing and Assessment</h4>
                            <h1></h1>
                            <span></span>
                        </div>
                        <ul>
                        </ul>
                        <div class="blue-button">
                            <a href="https://csrc.nist.gov/pubs/sp/800/115/final">Clique aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="contact" id="contact">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="wrapper">
                  <div class="section-heading">
                      <span></span>
                      <h2>Contato</h2>
                  </div>
                  <!-- Modal button -->
                  <button id="modBtn" class="modal-btn">Clique aqui</button>
                </div>  
                <div id="modal" class="modal">
                  <!-- Modal Content -->
                  <div class="modal-content">
                    <div class="close fa fa-close"></div>
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <span>Contato</span>
                                            <h2>Vamos conversar</h2>
                                        </div>
                                    </div>
                                    <form>
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Seu nome..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensagem..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Enviar Mensagem</button>
                                      </fieldset>
                                    </div>
                                    </form>
                                    <?php
                                    /*Contexto para Client-Side Template Injection + XSS por AngularJS.*/
                                    		if (isset($_GET['name'])){
															echo "<h3 ng-app>Olá <span style='color: blue;'> ".filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS)."</span> sua mensagem foi enviada com sucesso!!</h3>";                                    		
                                    		}
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">                                          
                                            <div class="section-heading">
                                                <span></span>
                                                <h2></h2>
                                            </div>
                                            <p></p>
                                            <ul>
                                                <li><span>Telefone:</span><a href="#">123-123-123</a></li>
                                                <li><span>Email:</span><a href="#">empresa@empresa.com</a></li>
                                                <li><span>Site:</span><a href="#">empresa.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                  </div>
                </div>
            </div>
        </div>
    </section>



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

    <script>
    
			const data = new URLSearchParams();
			data.append('d', 'formminghackers.com');

			fetch('ping.php', {
        		method: 'POST',
        		headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
        		},
        			body: data
			})
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));


			console.log('%cPARE!!', 'color: red; font-size: 820%;');     
			console.log('Este é um aviso para você não executar nenhum javascript aqui. Self-XSS acontece quando o atacante utiliza de engenharia social enganando a vítima para executar códigos de script no console do navegador. Referências: https://en.wikipedia.org/wiki/Self-XSS  - https://www.facebook.com/selfxss');   
    </script>
    </head>
</body>
</html>