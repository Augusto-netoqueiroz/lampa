<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Call Center</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #34495e;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: inline-block;
        }
        .container {
            margin: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .box {
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 300px;
            border-radius: 5px;
        }
        .box h3 {
            margin: 0 0 15px;
            color: #2c3e50;
        }
        .box p {
            font-size: 14px;
            line-height: 1.6;
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
    </style>
</head>
<body>
    <header>
        <h1>Painel de Monitoramento - Call Center</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Operadores</a>
        <a href="#">Relatórios</a>
        <a href="#">Configurações</a>
    </nav>

    <div class="container">
        <!-- Exemplo de caixa de informações sobre operadores -->
        <div class="box">
            <h3>Status dos Operadores</h3>
            <p>Operadores disponíveis: <strong><?php echo rand(5, 10); ?></strong></p>
            <p>Operadores em chamadas: <strong><?php echo rand(0, 5); ?></strong></p>
            <p>Operadores offline: <strong><?php echo rand(0, 3); ?></strong></p>
        </div>

        <!-- Exemplo de caixa de informações sobre chamadas -->
        <div class="box">
            <h3>Chamadas Atuais</h3>
            <p>Chamadas em andamento: <strong><?php echo rand(10, 20); ?></strong></p>
            <p>Chamadas finalizadas hoje: <strong><?php echo rand(50, 100); ?></strong></p>
            <p>Chamadas abandonadas: <strong><?php echo rand(5, 15); ?></strong></p>
        </div>

        <!-- Exemplo de caixa de informações sobre KPIs -->
        <div class="box">
            <h3>KPIs</h3>
            <p>Aderência ao Script: <strong><?php echo rand(85, 95); ?>%</strong></p>
            <p>Tempo Médio de Atendimento (TMA): <strong><?php echo rand(3, 5); ?> min</strong></p>
            <p>Satisfação do Cliente: <strong><?php echo rand(80, 100); ?>%</strong></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Call Center Dashboard. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
