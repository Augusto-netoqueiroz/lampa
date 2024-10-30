<?php
include 'comum.php';
include 'connect.php';


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento</title>
    <!-- Bootstrap 4.1 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .card-monitoramento {
            margin-bottom: 20px;
            text-align: center;
        }
        .status-box {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .status-box .status-item {
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            background-color: #f1f1f1;
            margin: 0 10px;
            flex: 1;
        }
        .status-item span {
            display: block;
            font-size: 1.2em;
        }
        .status-item small {
            display: block;
            font-size: 0.8em;
            color: #777;
        }
        .ramal-card {
            padding: 20px;
            text-align: center;
        }
        .ramal-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .ramal-card span {
            font-size: 1rem;
        }
        .filter-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Monitoramento</h1>
        </div>
    </div>

    <!-- Status geral -->
    <div class="row status-box">
        <div class="col-md-2 status-item bg-danger text-white">
            <span>02:49</span>
            <small>TMA</small>
        </div>
        <div class="col-md-2 status-item bg-success text-white">
            <span>01:48</span>
            <small>TME</small>
        </div>
        <div class="col-md-2 status-item bg-info text-white">
            <span>04:38</span>
            <small>TMO</small>
        </div>
        <div class="col-md-2 status-item bg-primary text-white">
            <span>69.6%</span>
            <small>Nível de serviço</small>
        </div>
        <div class="col-md-2 status-item bg-warning text-white">
            <span>105</span>
            <small>Recebidas</small>
        </div>
        <div class="col-md-2 status-item bg-success text-white">
            <span>71</span>
            <small>Atendidas</small>
        </div>
    </div>

    <!-- Filtros e sincronização -->
    <div class="filter-box">
        <div>
            <button class="btn btn-outline-primary">Filtrar filas</button>
            <button class="btn btn-outline-secondary">Criar conferência</button>
        </div>
        <div>
            <button class="btn btn-outline-primary">Sincronizar ramais</button>
        </div>
    </div>

    <!-- Monitor de ramais -->
    <div class="row">
        <div class="col-md-3">
            <div class="card card-monitoramento bg-info text-white">
                <div class="card-body ramal-card">
                    <h5>1004</h5>
                    <span>Motivo: Almoço</span><br>
                    <small>00:31:49</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-monitoramento bg-info text-white">
                <div class="card-body ramal-card">
                    <h5>1008</h5>
                    <span>Motivo: Monitoria</span><br>
                    <small>06:20:09</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-monitoramento bg-success text-white">
                <div class="card-body ramal-card">
                    <h5>1010</h5>
                    <span>Aguardando</span><br>
                    <small>00:00:36</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-monitoramento bg-danger text-white">
                <div class="card-body ramal-card">
                    <h5>1032</h5>
                    <span>Em chamada</span><br>
                    <small>00:00:36</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
