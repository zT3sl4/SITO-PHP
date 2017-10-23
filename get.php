<head>
<title>Get</title>
<link href="stile.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 align="center">Risposta Get</h1>
<header>
<nav align="center"> <a href="index.html">HOME</a>
    <a href="get.html" title="get">GET</a>
    <a href="post.html" title="post">POST</a>
    <a href="server.html" title="server">SERVER</a>
</nav>
</header>
<br><br>
<?php
		$nome = $_GET["nome"];
		$cognome = $_GET["cognome"];
		$genere = $_GET["genere"];
		$email = $_GET["email"];
		echo "La richiesta a nome di $nome $cognome ($genere) e stata registrata.<br>";
		echo "Con indirizzo e-mail: $email.<br>";
		echo "La richiesta e arrivata alle ore ", date("H:i:s "),"del giorno: ", date("d-m-Y");
?>
<br><br>
</body>
</>



