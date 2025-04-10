<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-wrapper {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #34495e;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccd6dd;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 16px;
            transition: 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 500px) {
            .form-wrapper {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="form-wrapper">
        <h2>Cadastrar Produto</h2>
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" required>

            <label for="estoque">Estoque:</label>
            <input type="text" name="estoque" id="estoque" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
