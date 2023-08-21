<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de novos sinistros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
    background-color: #34495e;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
    </style>

</head>
<body>
    <div class="container">
        <div class="form-header">
            <h2>Cadastro de novos sinistros</h2>
        </div>
        <form method="POST" action="processar_registro.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de sinistro:</label>
                <input type="text" name="tipo" required>
            </div>

            <div class="form-group">
                <label for="carro">Número do carro:</label>
                <input type="text" name="carro" required>
            </div>

            <div class="form-group">
                <label for="VeiculoTerceiro">Veículo do Terceiro::</label>
                <input type="text" name="VeiculoTerceiro" required>
            </div>


            <div class="form-group">
                <label for="observacao">Observações:</label>
                <input type="text" name="observacao" required>
            </div>
            
            <div style="display: flex; justify-content: center;">
            <div class="form-group">
                 <input type="submit" value="   Finalizar registro   " style="border: 2px solid #000;">
            </div>
            </div>

        </form>
    </div>
</body>
</html>