<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="description" content='CV de Ruben Trottein, développeur Web Junior' />
		<style>@import url('https://fonts.googleapis.com/css?family=Cinzel+Decorative|Fredericka+the+Great|IBM+Plex+Mono|Orbitron|Raleway|Share+Tech|Spirax|Syncopate');</style>
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel='stylesheet' href='style.css' />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<title>Trottein Ruben</title>
	</head>
	<body>
		<header>
			<nav class="text-center">
				<ul class="inline-block">
				<li class="pull-left active"><a href="#" data-direction="front">Home</a></li>
				<li class="pull-left"><a href="#" data-direction="back">Portfolio</a></li>
				<li class="pull-left"><a href="#" data-direction="top">About</a></li>
				<li class="pull-left"><a href="#" data-direction="right">Contact</a></li>
				<div class="clearfix"></div>
				</ul>
			</nav>
		</header>
		<div id="wrap">
			<div class="cube">
				<section class="page active face front" id="home">
					<div class="act-table text-center">
						<div class="act-table-cell ver-middle">Home Page</div>
					</div>
				</section>
				<section class="page face back" id="portfolio">
					<div class="act-table text-center">
						<div class="act-table-cell ver-middle"></div>
						<div class="container">	
								<div class='text-center'>
									<h2>Mes dernières réalisations</h2>
									<hr />
									<p class="subtitle"><i>Voici les sites que j'ai été amené à concevoir en tant que développeur web</i></p> 
								</div>
								<section id="vignettes">
								
									<div class='row justify-content-between'>
										<div class="col-3">
											<h3>ESHOP</h3>
											<p><i>Projet Front-end (IFOCOP)</i><br></p>
											<img src="images/eshopscreenshot.png" class="portfolioitem" alt="ESHOP"/>
											<a href="#eshop">Description détaillée</a>
										</div>
										<div class="col-3">
											<h3>TROC !</h3>
											<p><i>Projet de cours PHP.</i><br></p>
											<img src="images/trocscreenshot.png" class="portfolioitem" alt="TROC !" />
											<a href="#troc">Description détaillée</a>
										</div>
										<div class="col-3">
											<h3>CV1</h3>
											<p><i>Site de présentation pré-formation</i><br></p>
											<img src="images/cv1screenshot.png" class="portfolioitem" alt="CV1"/>
											<a href="#cv1">Description détaillée</a>
										</div>
										<div class="col-3">
											<h3>mistertea.fr</h3>
											<p><i>Site perso</i><br></p>
											<a href="#mistertea"><img class="portfolioitem" src="images/wpscreenshot.png" alt="MisterTea" />
											<p>Description détaillée</p></a>
										</div>
									</div>
								</section>
							</div>
				<!---------------------------------Descriptions---------------------------->
							<section id="competences">
								<div class=" row">	
									<h2 class="col-12 text-center">Les projets en détail</h2>
									<hr />
									<div class="container ">
										<article class="impair justify-content-between row">
											<h3 class="col-3" id="eshop">Eshop</h3>
												<ul class="col"><h4>Projet de cours HTML/CSS</h4>
													<li>Site web statique(Front end)</li>
													<li>Intégration, reproduction d'une maquette, architecture du site, design des pages annexes</li>
													<li>Formulaires et processus fonctionnels simulés,</li>
													<li>Référencement naturel.</li>
													<li>Langages utilisés:  HTML, CSS, JS, Jquery, bootstrap</li>
											</ul>
										</article>
									</div>
									
									<div class="container">
										<article class="pair justify-content-between row">
											<h3 class="col-3" id="troc">TROC !</h3>
												<ul class="col"><h4>Projet de cours Php/SqL</h4>
													<li>Site web dynamique(Back end)</li>
													<li>Intégration, architecture, design des pages annexes,</li> 
													<li>formulaires et processus 100% fonctionnels></li>
													<li>Référencement naturel, sécurité.</li>
													<li>Langages PHP, SqL, HTML, CSS, JS, Jquery, bootstrap</li>
											</ul>
										</article>
									</div>
										
									<div class="container">
										<article class="impair justify-content-between row">
											<h3 class="col-3" id="cv1">CV1</h3>
												<ul class="col" ><h4>Page de présentation</h4>
													<li>Page web statique(Front end) Créée en autonomie(Autoformation pré-IFOCOP)</li>
													<li>Intégration, Design, FTP, référencement naturel.</li>
													<li>Langages utilisés:  HTML, CSS</li>
											</ul>
										</article>
									</div>
				
									<div class="container">
										<article class="pair justify-content-between row">
											<h3 class="col-3" id="mistertea">mistertea.fr</h3>
												<ul class="col"><h4>Site personnel Wordpress</h4>
													<li>Site web sous CMS</li>
													<li>Thème enfant, personnalisation, plugins, architecture, design des pages annexes,</li>
													<li>Formulaires et processus 100%fonctionnels, référencement naturel, sécurité.</li>
													<li>Langages PHP, SQL, HTML, CSS, JS, Jquery, bootstrap</li>
											</ul>
										</article>
									</div>
								</div>
							</section>
				<!---------------------------------Pied de page---------------------------->
						<footer>
							<div class="container">
								<div class="row">
									<div class="foot col-12">
										<ul>
											<li><a href='pages/about.html' title="Autres Informations"><img src="images/icons/question.svg" alt='A propos' />A propos</a></li>
											<li><a href='mailto:ruben.trottein@gmail.com' title="E-mail"><img src='images/icons/gmail.png' alt='email' />M'écrire</a></li>
											<li><a href='pj/cv.pdf' title="Pdf"><img src="images/icons/pdf.png" alt='CV au format PDF' />Telecharger CV Pdf</a></li>
										</ul>   
									</div>
								</div>
				<!-----------------------------Bannière Contact---------------------------->
								<div class="row">
									<div class="banner col-12 justify-content-center">
										<a href='pages/contact.html'><img src="images/banner.png" alt="Ruben Trottein" /></a>
									</div>
								</div>
							</div>
						</footer>
					</div>
				</section>
				<section class="page face top" id="about">
					<div class="act-table text-center">
						<div class="act-table-cell ver-middle">about Page</div>
					</div>
				</section>
				<section class="page face right" id="contact">
					<div class="act-table text-center">
                        <div class="act-table-cell ver-middle">contact Page</div>
                        <?php  
//Ecrivez votre adresse e-mail entre les guillemets  
$destinataire='monadresse@mondomaine';  
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "[http://www.w3.org/TR/html4/strict.dtd]">  
<html lang="fr">  
<head>  
  <title>Contact</title>  
  <style type="text/css">  
    form#contact{border:2px solid red;width:70%;padding:1em}  
    p#msg,p#adr,p#obj{border:2px solid green;margin-right:10%;padding:10px}  
    p#msg textarea{border:2px solid blue;height:30em;width:80%}  
    p#adr input,p#obj input{border:2px solid blue}  
    p.bt{text-align:center}  
    p.bt input{border:1px red solid;width:50%}  
  </style>  
  <meta http-equiv="content-type" content="Content-type:text/html;charset=iso-8859-1">  
</head>  
<body style="direction: ltr;">  
<h1>Contact</h1>  
<?php  
$Previsualiser='<p class="bt">  
<input type="submit" name="previsualiser" tabindex="3" value="Prévisualiser"></p>';  
$Envoi="\n".'<p class="bt">  
<input name="envoi" tabindex="4" value="Envoyer" type="submit"></p>';  
if (isset($_POST['message']))  
  {  
    // La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  
    //quelques remplacements pour les specialchars  
    $message=preg_replace('#(<|>)#', '-', $_POST['message']);  
    $message=str_replace('"', "'",$message);  
    $message=str_replace('&', 'et',$message);  
    $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);  
    $objet=str_replace('"', "'",$objet);  
    $objet=str_replace('&', 'et',$objet);  
    // On assigne et/ou protège nos variables  
    $votremail=stripslashes(htmlentities($_POST['votremail']));  
    $message=stripslashes(htmlspecialchars($message));  
    $objet=stripslashes(htmlspecialchars($objet));  
    //input envoi/previsualiser  
    $envoi=htmlentities($_POST['envoi']);  
    $previsualiser=htmlentities($_POST['previsualiser']);  
    //on enlève les espaces  
    $votremail=trim($votremail);  
    $message=trim($message);  
    $objet=trim($objet);  

    $apercu_resultat='<p>Aperçu du résultat :</p>';  

    /*On vérifie si l'e mail et le message sont pleins, et on agit en fonction.  
      (on affiche Apercu du resultat, tel ou tel champ est vide, etc...*/  
    //Si ca ne vas pas (mal rempli, mail non valide...)  
    if((empty($message))or(empty($objet))or(!preg_match($verif,$votremail)))  
      {  
        //les 3 champs sont vides  
        if(empty($votremail)and(empty($message))and(empty($objet)))  
          {  
            echo '<p>Tous les champs sont vides.</p>';  
            $message='';$votremail='';$objet='';$apercu_resultat='';  
          }  
        //un des champs est vide  
        else  
          {  
            if(!preg_match($verif,$votremail))  
              echo'<p>Votre adresse e-mail n\'est pas valide.</p>';  
            else  
            {  
              echo'<p>Il faut remplir tous les champs !</p>';  
              if(empty($message))  
                $apercu_resultat='';  
            }  
          }  
      }  
    //Si les deux sont pleins et que l'adresse est valide, on envoie on on prévisualise sans envoi  
    else  
      {  
        $domaine=preg_replace('#[^@]+@(.+)#','$1',$votremail);  
        $DomaineMailExiste=checkdnsrr($domaine,'MX');  
        if(!$DomaineMailExiste)  
          echo'<p>Le nom de domaine de l\'adresse e-mail que vous avez donné n\'existe pas.</p>';  
        elseif(!empty($previsualiser))  
            {  
              $apercu_resultat='<p>Votre message et votre adresse e-mail sont valides et prêts à être envoyés.  
              <br>Vous n\'avez plus qu\'à cliquer sur le bouton "Envoyer".<br>Prévisualisation :</p>';  
              $Previsualiser='';  
            }  
        elseif(!empty($envoi))  
            {  
              $objet='[SITE] : '.$objet;  
              $headers='From:'.$votremail."\r\n".'To:'.$mail."\r\n".'Subject:'.$objet."\r\n".'Content-type:text/plain;charset=iso-8859-1'."\r\n".'Sent:'.date('l, F d, Y H:i');  
              if(mail($destinataire,$objet,$message,$headers))  
              {  
                echo '<p>Votre message a bien été envoyé. Merci.</p><p><a href="/">Retour à la page d\'accueil</a></p>';  
                $Envoi='';  
                $Previsualiser='';  
              }  
              else  
                echo'<p>Un problème est survenu durant l\'envoi du mail.</p>';  
            }  
        else  
          echo'<p>Une condition innatendue est survenue lors de l\'exécution du script.</p>';  
      }  
echo $apercu_resultat;  
  }  
else  
  {  
  echo '<p>Vous pouvez utiliser ce formulaire pour me contacter.</p>';  
  $votremail='';$message='';  
  }  
$bas_formulaire=$Previsualiser.$Envoi;  
?>  
<form id='contact' method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">  
  <p id='obj'><label for='objet'>Objet de votre message :<br>  
  <input type='text' name='objet' id='objet' tabindex='10' size='30'></label></p>   

  <p id="adr"><label for="mail">Votre Adresse E-mail<br>  
  <input name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $votremail; ?>"></label></p>  
    
  <p id="msg"><label for="message">Votre message<br>  
  <textarea tabindex="30" rows="20" cols="120" name="message" id="message"><?php echo $message; ?></textarea>  
  </label></p>  
<?php echo $bas_formulaire;?>  
</form>  
</body>  
</html>

Une autre version en PHP5
Cet autre formulaire est écrit en PHP5 et ne comporte pas de pré-visualisation. Le code source 
<?php  
    define( 'MAIL_TO', /* >>>>> */'utilisateur@domaine.tld'/* <<<<< */ );  //ajouter votre courriel  
    define( 'MAIL_FROM', 'utilisateur@domaine.tld' ); // valeur par défaut  
    define( 'MAIL_OBJECT', 'objet du message' ); // valeur par défaut  
    define( 'MAIL_MESSAGE', 'votre message' ); // valeur par défaut  

    $mailSent = false; // drapeau qui aiguille l'affichage du formulaire OU du récapitulatif  
    $errors = array(); // tableau des erreurs de saisie  
      
    if( filter_has_var( INPUT_POST, 'send' ) ) // le formulaire a été soumis avec le bouton [Envoyer]  
    {  
        $from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );  
        if( $from === NULL || $from === MAIL_FROM ) // si le courriel fourni est vide OU égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez renseigner votre adresse de courrier électronique.';  
        }  
        elseif( $from === false ) // si le courriel fourni n'est pas valide  
        {  
            $errors[] = 'L\'adresse de courrier électronique n\'est pas valide.';  
            $from = filter_input( INPUT_POST, 'from', FILTER_SANITIZE_EMAIL );  
        }  

        $object = filter_input( INPUT_POST, 'object', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_LOW );  
        if( $object === NULL OR $object === false OR empty( $object ) OR $object === MAIL_OBJECT ) // si l'objet fourni est vide, invalide ou égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez renseigner l\'objet.';  
        }  

 /* pas besoin de nettoyer le message.   
 / [http://www.phpsecure.info/v2/article/MailHeadersInject.php]  
 / Logiquement, les parties message, To: et Subject: pourraient servir aussi à injecter quelque chose,  mais la fonction mail()  
 / filtre bien les deux dernières, et la première est le message, et à partir du moment où on a sauté une ligne dans l'envoi du mail,  
 / c'est considéré comme du texte; le message ne saurait donc rester qu'un message.*/  
        $message = filter_input( INPUT_POST, 'message', FILTER_UNSAFE_RAW );  
        if( $message === NULL OR $message === false OR empty( $message ) OR $message === MAIL_MESSAGE ) // si le message fourni est vide ou égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez écrire un message.';  
        }  

        if( count( $errors ) === 0 ) // si il n'y a pas d'erreurs  
        {  
            if( mail( MAIL_TO, $object, $message, "From: $from\nReply-to: $from\n" ) ) // tentative d'envoi du message  
            {  
                $mailSent = true;  
            }  
            else // échec de l'envoi  
            {  
                $errors[] = 'Votre message n\'a pas été envoyé.';  
            }  
        }  
    }  
    else // le formulaire est affiché pour la première fois, avec les valeurs par défaut  
    {  
        $from = MAIL_FROM;  
        $object = MAIL_OBJECT;  
        $message = MAIL_MESSAGE;  
    }  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "[http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd]">  
<html lang="fr" xmlns="[http://www.w3.org/1999/xhtml]" xml:lang="fr">  
    <head>  
        <title>Contact</title>  
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />  
        <meta http-equiv="content-language" content="fr" />  
        <style type="text/css">  
html{ font-family:Geneva, Arial, Helvetica, sans-serif; margin:0; padding:0; font-size:.88em;}  
body{ width:772px; margin:0 auto; padding:0; }  
textarea{ width:772px; }  
label{ display:block; font-weight:bold; }  
p#welcome{ padding:10px 20px; border:1px dotted #00f; color:#00f; font-weight:bold; }  
ul{ padding:10px 20px; border:1px dotted #f00; color:#f00; font-weight:bold; }  
p#success{ padding:10px 20px; border:1px dotted #0f0; color:#0f0; font-weight:bold; }  
p em{ display:block; font-weight:normal; }  
        </style>  
    </head>  
    <body>  
        <h1>Contact</h1>  
        <hr />  
<?php  
    if( $mailSent === true ) // si le message a bien été envoyé, on affiche le récapitulatif  
    {  
?>  
        <p id="success">Votre message a bien été envoyé.</p>  
        <p><strong>Courriel pour la réponse :</strong><br /><?php echo( $from ); ?></p>  
        <p><strong>Objet :</strong><br /><?php echo( $object ); ?></p>  
        <p><strong>Message :</strong><br /><?php echo( nl2br( htmlspecialchars( $message ) ) ); ?></p>  
<?php  
    }  
    else // le formulaire est affiché pour la première fois ou le formulaire a été soumis mais contenait des erreurs  
    {  
        if( count( $errors ) !== 0 )  
        {  
            echo( "\t\t<ul>\n" );  
            foreach( $errors as $error )  
            {  
                echo( "\t\t\t<li>$error</li>\n" );  
            }  
            echo( "\t\t</ul>\n" );  
        }  
        else  
        {  
            echo( "\t\t<p id=\"welcome\"><em>Tous les champs sont obligatoires</em></p>\n" );  
        }  
?>  
        <form id='contact' method="post" action="<?php echo( $_SERVER['REQUEST_URI'] ); ?>">  
            <p>  
                <label for="from">Courriel pour la réponse</label>  
                <input type="text" name="from" id="from" value="<?php echo( $from ); ?>" />  
            </p>  
            <p>  
                <label for="object">Objet</label>  
                <input type="text" name="object" id="object" value="<?php echo( $object ); ?>" />  
            </p>   
            <p>  
                <label for="message">Message</label>  
                <textarea name="message" id="message" rows="20" cols="80"><?php echo( $message ); ?></textarea>  
            </p>  
            <p>  
                <input type="reset" name="reset" value="Effacer" />  
                <input type="submit" name="send" value="Envoyer" />  
            </p>  
        </form>  
<?php  
    }  
?>  
					</div>
				</section>
				<section class="page face bottom" id="blog">
					<div class="act-table text-center">
						<div class="act-table-cell ver-middle">blog Page</div>
					</div>
				</section>
				<section class="page face left" id="article">
					<div class="act-table text-center">
						<div class="act-table-cell ver-middle">article Page</div>
					</div>
				</section>
			</div>
		</div>
	</body>
</html>
	