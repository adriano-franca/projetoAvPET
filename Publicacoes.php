<?php

include("connect.php");

$consulta = "SELECT * FROM publicacoes";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/style.css">
        <div class="titulo">Publicações</div>
    </head>
    <body>

        <table border="1">
            <tr class="titulo">
                <td>Título</td>
                <td>Autores</td>
                <td>Links</td>
            </tr>
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td class="textTabel"><?php print_r($dado["titulo"]); ?></td>
                <td class="textTabel"><?php print_r($dado["autores"]); ?></td>
                <td class="textTabel"><a href="<?php print_r($dado["link_publicacao"]);?>">Acessar</a></td>
            </tr>
            <?php } ?>
        </table>

    </body>
    <footer>
		<link rel="stylesheet" href="assets/style.css">
		<div class="contatos">
			Endereço: Av. dos Portugueses, 1966 - Vila Bacanga,<br>
			São Luís - MA, 65080-805, CCET - Bloco 2<br>
			Email: petcomputacao.ufma@gmail.com<br>
			Instagram: <a href="https://www.instagram.com/petcompufma/">@PetCompUfma</a><br>
			Twitter: <a href="https://twitter.com/petcompufma">@PetCompUfma</a><br>
		</div>
	</footer>
</html>