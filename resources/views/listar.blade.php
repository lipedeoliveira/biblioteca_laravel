<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e8f0ff, #d0e1ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .produto-container {
            background-color: #ffffff;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 480px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 24px;
            color: #2c3e50;
            font-size: 28px;
        }

        .produto-info {
            margin-bottom: 20px;
        }

        .produto-info label {
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 4px;
        }

        .produto-info span,
        .produto-info p {
            display: block;
            background: #f8fafc;
            padding: 12px 16px;
            border-radius: 10px;
            color: #333;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        br {
            display: none;
        }
    </style>
</head>
<body>
    <div class="produto-container">
        <h1>Produtos</h1>

        <div class="produto-info">
            <?php echo "<label>Nome do Produto:</label><p>$produto->nome</p>"; ?>
        </div>

        <div class="produto-info">
            <?php echo "<label>Valor do Produto:</label><p>$produto->valor</p>"; ?>
        </div>

        <div class="produto-info">
            <?php echo "<label>Estoque do Produto:</label><p>$produto->estoque</p>"; ?>
        </div>
    </div>
</body>
</html>
