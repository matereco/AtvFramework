<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/imc/{nome}/{peso}/{altura}/{genero?}',[PacienteController::class,'CalcularIMC']);

/*Route::get('/imc/{nome}/{peso}/{altura}/{genero?}', function ($nome, $peso, $altura, $genero = null) {
    $genero = strtolower($genero);
    $nome = ucfirst($nome);



    //peso e altura
    if(is_numeric($peso)&&is_numeric($altura)){
        $imc = $peso/($altura*$altura);
    }else{
        return "Informe apenas valores válidos";
    }
    //genero
    if($genero == 'masculino'){

        $genero_escolhido = "Sr. ";

    }elseif($genero == 'feminino'){

        $genero_escolhido = "Sra. ";

    }else{
        return "Informe apenas valores válidos";
    }
    //imc

    $imc_formatado = number_format($imc,2,",",".");
    if ($imc<=18.5) {
    $frase = "está abaixo do peso";
    }elseif ($imc>=18.6 && $imc<=24.9) {
       $frase= "tem o peso ideal";
    }elseif($imc>=25 && $imc<=29.9){
        $frase = "está levemente acima do peso";
    }elseif($imc>=30 && $imc <= 34.9){
        $frase = "tem Obesidade grau I";
    }elseif($imc>=35 && $imc<=39.9){
        $frase = "tem Obesidade grau II";
    }elseif($imc>=40){
        $frase = "tem Obesidade grau III";
    }

    return ("Olá $genero_escolhido $nome, seu IMC é $imc_formatado. Você $frase");



    //return view('welcome');
});*/
