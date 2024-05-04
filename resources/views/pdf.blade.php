<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>

    <style>
        main{
            border: 2px solid rgb(202, 145, 40);
            padding: 1.5rem
        }
        *{
            font-family: sans-serif;
         }

         #titulo{
            background-color: rgb(202, 145, 40);
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 5rem;
         }

        body{

        }
    </style>


    <main>

        <div id="titulo">
            <h1>Relatório Geral de Vendas</h1>
        </div>

        <div id="logotipo">

        </div>


        @foreach ($usuarios as $use)
        <h2>Nome do Usuario:</h2><h2> {{$use->nome}}</h2><br>
        <h2>Email:</h2><h2> {{$use->email}}</h2><br>
        <h2>Telefone:</h2><h2> {{$use->telefone}}</h2><br>
        @endforeach
        @foreach ($pedidos as $pedido)
        <h2>Nome do cliente: {{$pedido->usuario->nome}}</h2>
        <h2>Quatidade de produto:</h2> <h2> {{$pedido->numero_convidados}}</h2><br>
        <h2>Produto:</h2><h2> {{$pedido->produto}}</h2><br>
        <h2>Mensagem:</h2> <h2> {{$pedido->mensagem}}</h2><br>
        @endforeach

    </main>
    </body>
</html>
