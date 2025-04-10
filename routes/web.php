<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('inicio');
});
Route::post('/cadastrar-produto',function(Request $request){

    Produto::create ([

        'nome'=>$request->nome,
        'valor'=>$request->valor,
        'estoque'=>$request->estoque
    ]);
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Sucesso</title>
        <style>
            body {
                background: #f0f4ff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: Arial, sans-serif;
                margin: 0;
            }
            .msg-box {
                background: white;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
                text-align: center;
            }
            .msg-box h2 {
                color: #4c7dfd;
                margin-bottom: 20px;
            }
            .btn {
                background: #4c7dfd;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                text-decoration: none;
                font-weight: bold;
            }
            .btn:hover {
                background: #375dd3;
            }
        </style>
    </head>
    <body>
        <div class="msg-box">
            <h2>Produto criado com sucesso!</h2>
            <a href="/" class="btn">Voltar ao início</a>
        </div>
    </body>
    </html>
    ';});

Route::get('/listar-produto/{id}',function($id){

    $produto = Produto::find($id);
    return view('listar',['produto'=>$produto]);

});


Route::get('/editar-produto/{id}',function($id){
    $produto = Produto::find($id);
    return view('editar',['produto'=>$produto]);
});

Route::post('/editar-produto/{id}',function(Request $request,$id){

    $produto = Produto::find($id);

    $produto->update([

        'nome'=>$request->nome,
        'valor'=>$request->valor,
        'estoque'=>$request->estoque
    ]);
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Sucesso</title>
        <style>
            body {
                background: #f0f4ff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: Arial, sans-serif;
                margin: 0;
            }
            .msg-box {
                background: white;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
                text-align: center;
            }
            .msg-box h2 {
                color: #4c7dfd;
                margin-bottom: 20px;
            }
            .btn {
                background: #4c7dfd;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                text-decoration: none;
                font-weight: bold;
            }
            .btn:hover {
                background: #375dd3;
            }
        </style>
    </head>
    <body>
        <div class="msg-box">
            <h2>Produto editado com sucesso!</h2>
            <a href="/" class="btn">Voltar ao início</a>
        </div>
    </body>
    </html>
    ';
});

Route::get("/excluir-produto/{id}",function($id)
{
    $produto = Produto::find($id);
    $produto->delete();

    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Sucesso</title>
        <style>
            body {
                background: #f0f4ff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: Arial, sans-serif;
                margin: 0;
            }
            .msg-box {
                background: white;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
                text-align: center;
            }
            .msg-box h2 {
                color: #4c7dfd;
                margin-bottom: 20px;
            }
            .btn {
                background: #4c7dfd;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                text-decoration: none;
                font-weight: bold;
            }
            .btn:hover {
                background: #375dd3;
            }
        </style>
    </head>
    <body>
        <div class="msg-box">
            <h2>Produto excluido com sucesso!</h2>
            <a href="/" class="btn">Voltar ao início</a>
        </div>
    </body>
    </html>
    ';
});
