<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout.template')
@section('conteudo')
<h1>Calcular IMC</h1>

   <ul class="list-group">
       <li class="list-group-item">
        @if ($imc_formatado >=18.6 && $imc_formatado<=24.9)
            <div class="bg-success p-2 text-white">{{$resposta}}</div>
        @else
            <div class="bg-danger p-2 text-white">{{$resposta}}</div>
        @endif



       </li>
   </ul>

   @endsection
</body>
</html>
