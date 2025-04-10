<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Editar Produtos</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #eef3ff, #d9e5ff);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    form {
      background-color: #fff;
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
      max-width: 480px;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 24px;
      font-size: 26px;
      color: #2c3e50;
    }

    label {
      display: block;
      margin-top: 16px;
      font-weight: 600;
      color: #333;
    }

    input {
      width: 100%;
      padding: 12px 16px;
      margin-top: 6px;
      border-radius: 10px;
      border: 1px solid #ccc;
      background-color: #f9fafc;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #4c7dfd;
      outline: none;
    }

    button {
      margin-top: 24px;
      width: 100%;
      padding: 14px;
      background-color: #4c7dfd;
      border: none;
      color: white;
      font-weight: bold;
      font-size: 16px;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #375dd3;
    }

    br {
      display: none;
    }
  </style>
</head>
<body>

  <form action="/editar-produto/{{$produto->id}}" method="POST">
    @csrf

    <h1>Editar Produto</h1>

    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{$produto->nome}}">

    <label for="lblValor">Valor do Produto:</label>
    <input type="text" name="valor" value="{{$produto->valor}}">

    <label for="lblEstoque">Estoque do Produto:</label>
    <input type="text" name="estoque" value="{{$produto->estoque}}">

    <button>Salvar Alterações</button>
  </form>

</body>
</html>
