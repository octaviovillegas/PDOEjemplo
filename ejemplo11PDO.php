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
                <h3 class="text-info"> Pasaje de parametros por nombre con el método bindValue</h3>
                    <div class="well well-sm text-info">
                                  class cd
                                    {<br>
                                      public static function TraerUnCdAnioParamNombre($id,$anio) 
                                          {<br>
                                              $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); <br>
                                              $consulta =$objetoAccesoDato->RetornarConsulta("select  titel as titulo, interpret as cantante,jahr as año from cds  WHERE id=:id AND jahr=:anio");<br>
                                              $consulta->bindValue(':id', $id, PDO::PARAM_INT);<br>
                                              $consulta->bindValue(':anio', $anio, PDO::PARAM_STR);<br>
                                              $consulta->execute();<br>
                                              $cdBuscado= $consulta->fetchObject('cd');<br>
                                                  return $cdBuscado;<br>        

                                              
                                          }<br>
                                    
                                    
                                    }<br>
                                    //utilización del método estatico<br>
                                       $unCd =cd::TraerUnCdAnioParamNombre(2,1990);<br>
                                   
                                        if(isset($unCd->titulo))<br>
                                         print_r($unCd->mostrarDatos());<br>
                                        else<br>
                                           print("No existe");<br>

                                       


                                    
                    </div>
             </div>
             <h3 >  Método de la clase  </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/cd.php");

                                     $unCd =cd::TraerUnCdAnioParamNombre(1,1990);
                                   
                                        if(isset($unCd->titulo))
                                         print_r($unCd->mostrarDatos());
                                        else
                                           print("No existe");

                                        print("<br>");

                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



