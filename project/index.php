<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="modal/modal.css">

    <title>Include Example</title>

</head>

<body>
    <header>
        <nav>
            <div class="topnav">
                <a class="active" href="#home"> Inicio </a>
                <a href="#about"> Relatorio </a>
                <a href="#contact"> Contatos </a>
                <div class="btn-form">
                    <button class="btn-login" onclick="document.getElementById('id01').style.display='block'"> Login </button>
            
                </div>
            </div>
        </nav>
        <?php include "header.php"; ?>
        <?php include "modal/modal.php"; ?>
        <?php include "footer.php"; ?>
    </header>
<script src="modal/modal.js"></script>
</body>
</html>