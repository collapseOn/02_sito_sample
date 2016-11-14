<?php
	$page = "home";
	if (isSet($_GET["page"]))
		$page = $_GET["page"];

	$pages = array (
			"home" => "Home",
			"about-us" => "About Us",
			"services" => "Services",
			"contact" => "Contact"
	);

	$pagesKeys = array_keys($pages);

	$templates = "../tmpl";
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<title>Webbing x2</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>

<body>
	<div class="nav-down" id="header">
		<div class="container">

			<did id="logo">
				<h1>Logo Here</h1>
			</did>

			<nav>
				<ul>
					<?php foreach ($pages as $k => $v) :?>
					<li>
						<a
								<?php if($k == $page) :?>
									class="active"
								<?php endif; ?>
								data-hover="Desultory" 
								href="index.php?page=<?php echo $k;?>" data-classe="immagine-b"> <?php echo "<span>".$v."</span>"; ?>
						</a>
					</li>
				<?php endforeach; ?>
				</ul>
			</nav>

		</div>
	</div>

	<div id="slideshow" class="immagine-a">
		<a href="#"> Inizia ora</a>
	</div>

	<div class="content">
		<div class="container">
			<?php
				$page = isSet($_GET["page"]) ? $_GET["page"] : $pagesKeys[0];
				echo file_get_contents("tmpl/".$page.".html");
			?>
		</div>
		<!-- Fine Container -->
	</div>
	<!-- Fine Content -->

	<div id="footer">
		<div class="container">

			<form method="post" action="registrazione.php" class="form">
				<h2>Inscriviti alla nostra newsletter</h2>
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="nome" placeholder="Cognome">
				<input type="email" name="email" autocomplete="on" placeholder="E-mail">
				<input type="submit" value="Iscriviti">
			</form>
		</div>
	</div>

</body>

</html>
