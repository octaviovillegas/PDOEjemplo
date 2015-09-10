<!DOCTYPE html>
<html>
     <head>
        <title> Ejempos PHP</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
      <div class="container">
            <div class="page-header">
                <h1>Ejemplos de PHP</h1>      
            </div>
            <div class="jumbotron">
                <h3 class="text-info">Método de instancia para insertar.</h3>
                    <div class="well well-sm text-info">
                                  class cd
                                    {<br>
                                   public function InsertarElCdParametros()
                                       {<br>
                                            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); <br>
                                            $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into cds (titel,interpret,jahr)values(:titulo,:cantante,:anio)");<br>
                                            $consulta->bindValue(':titulo',$this->titulo, PDO::PARAM_INT);<br>
                                            $consulta->bindValue(':anio', $this->año, PDO::PARAM_STR);<br>
                                            $consulta->bindValue(':cantante', $this->cantante, PDO::PARAM_STR);<br>
                                            $consulta->execute();   <br>
                                            return $objetoAccesoDato->RetornarUltimoIdInsertado();<br>
                                       }<br>
                                       
                                    
                                    }<br>
                                    //utilización del método de instancia<br>
                                         $unCd =new cd();<br>
                                        $unCd->titulo="nuevo Titulo";<br>
                                        $unCd->año=date("his");<br>
                                        $unCd->cantante="nuevo cantante";  <br>                                  
                                        $UltimoId=$unCd->InsertarElCdParametros();<br>
                                        print("Ultimo ID: $UltimoId <br> ");



                                    
                    </div>
             </div>
             <h3 >  Método de la clase  </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/cd.php");

                                    $unCd =new cd();
                                    $unCd->titulo="nuevo Titulo";
                                    $unCd->año=date("his");
                                    $unCd->cantante="nuevo cantante";                                    
                                    $UltimoId=$unCd->InsertarElCdParametros();
                                    print("Ultimo ID: $UltimoId <br> ");

                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



