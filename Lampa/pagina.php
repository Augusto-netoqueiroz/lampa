<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Call Center</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer {
            text-align: center;
            background-color: #34495e;
            color: white;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .card-header {
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1>Painel de Monitoramento - Call Center</h1>
    </header>

    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Call Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Operadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Configurações</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <!-- Status dos Operadores -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Status dos Operadores</h5>
                    </div>
                    <div class="card-body">
                        <p>Operadores disponíveis: <strong><?php echo rand(5, 10); ?></strong></p>
                        <p>Operadores em chamadas: <strong><?php echo rand(0, 5); ?></strong></p>
                        <p>Operadores offline: <strong><?php echo rand(0, 3); ?></strong></p>
                    </div>
                </div>
            </div>

            <!-- Chamadas Atuais -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">Chamadas Atuais</h5>
                    </div>
                    <div class="card-body">
                        <p>Chamadas em andamento: <strong><?php echo rand(10, 20); ?></strong></p>
                        <p>Chamadas finalizadas hoje: <strong><?php echo rand(50, 100); ?></strong></p>
                        <p>Chamadas abandonadas: <strong><?php echo rand(5, 15); ?></strong></p>
                    </div>
                </div>
            </div>

            <!-- KPIs -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title">KPIs</h5>
                    </div>
                    <div class="card-body">
                        <p>Aderência ao Script: <strong><?php echo rand(85, 95); ?>%</strong></p>
                        <p>Tempo Médio de Atendimento (TMA): <strong><?php echo rand(3, 5); ?> min</strong></p>
                        <p>Satisfação do Cliente: <strong><?php echo rand(80, 100); ?>%</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Call Center Dashboard. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
