<?php

include("connect.php");

$consulta = "SELECT * FROM publicacoes";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
    <header>
                <div class="logo"><img src="assets/logo.png"></div>
                <div class="header">
                    <a href="index.php"class="menuitem">Inicio</a>
                    <a href="SobreNos.html" class="menuitem">Sobre Nós</a>
                    <a href="Publicacoes.php" class="menuitem">Publicações</a>
                    <a href="Biblioteca.html" class="menuitem">Biblioteca</a>
                </div>
        </header>
        <h2>Publicações</h2>
        <div>
            <?php while($dado = $con->fetch_array()){ ?>
                <h3>Titulo: <?php print_r($dado["titulo"]); ?></h3>
                <p class="textoAutores"> Autores: <?php print_r($dado["autores"]); ?></p>
                <p class="itembiblioteca"><a href="<?php print_r($dado["link_publicacao"]);?>">Acessar</a></p>
                <hr>
            <?php } ?>
        </table>

    </body>
    <footer>
		<div class="rodape">
        <h2>Contatos</h2>
            <ul>
                <li><img src="assets/map.svg" class="icon"><p>Endereço: Av. dos Portugueses, 1966 - Vila Bacanga, São Luís - MA, 65080-805, CCET - Bloco 2</p></li>
                <li><img src="assets/email.svg" class="icon"><p>Email: petcomputacao.ufma@gmail.com</p></li>
			    <li><img src="assets/insta.svg" class="icon"><p>Instagram: <a href="https://www.instagram.com/petcompufma/">@PetCompUfma</a></p></li>
			    <li><img src="assets/twitter.svg" class="icon"><p>Twitter: <a href="https://twitter.com/petcompufma">@PetCompUfma</a></p></li>
		</div>
	</footer>
</html>