<head>
<title>Post</title>
<link href="stile.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 align="center">Risultati</h1>
<header>
<nav align="center"> <a href="index.html">HOME</a>
    <a href="get.html" title="get">GET</a>
    <a href="post.html" title="post">POST</a>
    <a href="server.html" title="server">SERVER</a>
</nav>
</header>
<br><br>
 <body>
 <br>Il tuo indirizzo IP:
 <?php echo $_SERVER['REMOTE_ADDR'] . "<br />" ?> 
 <br>Il tuo browser WEB:
 <?php echo $_SERVER['HTTP_USER_AGENT'] . "<br />" ?>
 <br>Il tuo server WEB:
 <?php echo $_SERVER['SERVER SOFTWARE'] . "<br />" ?> 
 <br>Il tuo server:
<?php echo $_SERVER['SERVER_NAME'] . "<br />" ?>
</body>
<br><br>
</body>
</>