<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function CalcularIMC($nome, $altura, $peso, $genero){
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

        $imc_formatado = number_format($imc,1,",",".");
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
        $resposta = "Olá $genero_escolhido $nome, seu IMC é $imc_formatado. Você $frase";



        return view('imc', compact('resposta','imc_formatado'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
