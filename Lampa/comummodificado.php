<?php
session_start();

if(!isset ($_SESSION['usuario']) == true ) {
    unset($_SESSION['login']);
    header('Location:login_pabx2.php');
}
$logado = $_SESSION['usuario'];
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>L.A.M.P.A</title>

<link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bibliotecas/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="bootstrap-4.1.1-dist/css/estilocustom.css">

<style>
.drop-header-color {
    background-color: skyblue;
}
.bg {
    background-color: #74b9ff;
}

/* css submenus */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu a::after {
    transform: rotate(-90deg);
    position: absolute;
    right: 6px;
    top: .8em;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-left: .1rem;
    margin-right: .1rem;
}
</style>

</head>
<body>
<header class="section-header py-3 bg-primary">
<div class="d-flex px-5">
    <h2 class="text-light"><i class="fas fa-asterisk"></i>&nbsp;&nbsp;FUTURE TEC SERVER </h2>
</div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="home.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a> </li>
                <!-- Outros itens do menu -->
                <li class="nav-item "><p class="nav-link text-white"> <strong> | Usuario Logado : <?php echo $logado ?></strong> </p></li>
                <li class="nav-item "><a class="nav-link  text-white btn btn-outline-warning  py-2" href="logout.php"><i class="fas fa-walking ">&nbsp;&nbsp;Sair</i></a></li>
            </ul>
        </div> 
    </div> 
</nav>

<!-- Seção para exibir dados em tempo real -->
<div class="container mt-5">
    <h3>Dados em Tempo Real dos Ramais</h3>
    <div id="data-container" class="mt-3"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function fetchData() {
    $.ajax({
        url: 'fetch_data.php',
        method: 'GET',
        success: function(data) {
            $('#data-container').html(data);
        }
    });
}

// Chama a função fetchData a cada segundo
setInterval(fetchData, 1000);
</script>

<?php
// Exibir mensagens de alerta conforme necessário
if (isset($_GET['cadastro'])) {
    switch ($_GET['cadastro']) {
        case "ok":
            ?>     
            <div class="alert alert-success offset-2 w-50 dismissable">
                <button class="close" type="button" data-dismiss="alert">&times;</button>
                <strong class="d-flex justify-content-center">Ramal <?php echo $_GET['ramal']; ?> criado com sucesso na base de dados</strong>
            </div>
            <?php     
            break;
        case "fail":
            ?>
            <div class="alert alert-danger offset-2 w-50 dismissable">
                <button class="close" type="button" data-dismiss="alert">&times;</button>
                <strong class="d-flex justify-content-center">Ramal <?php echo $_GET['ramal']; ?> já existente na base de dados.</strong>
            </div>
            <?php  
            break;
    }
}

// Adicione outros blocos de mensagem conforme necessário...

?>
<script src="bootstrap-4.1.1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>