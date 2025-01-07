<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/modal.css">
    <title> Intranet </title>
</head>
<body>
    <header>
        <nav>
            <img src="imgs/img-logo/" alt="imagem logo da minha empresa">
            <a href="#"> Home </a>
            <a href="#"> Relatorios </a>
            <a href="#"> Contatos </a>
            <div class="login-container">
                <button onclick="document.getElementById('modal').style.display='block'" style="width: auto;"> Login </button>
            </div>
           ?php include modal.php ?>
        </nav>
    </header>
    
    <!-- script do modal -->
    <script>var modal = document.getElementById('modal');window.onclick = function(event) {if (event.target == modal) {modal.style.display = 'none';}}</script>
</body>
</html>
