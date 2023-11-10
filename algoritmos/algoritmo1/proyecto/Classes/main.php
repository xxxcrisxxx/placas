<?php
class main
{
    public function generatePlacas($provincia, $type)
    {
        //genera los caracteres aleatorios de la placa
        function generarCaracteresAleatorios()
        {
            $numeroInicial = mt_rand(0, 9);
            $numerosAleatorios = mt_rand(100, 999);
            return $numeroInicial . '-' . $numerosAleatorios;
        }


        $cadenaAleatoria = $provincia . $type . generarCaracteresAleatorios();

        // Retornar la cadena generada en lugar de imprimir
        return $cadenaAleatoria;
    }
}
