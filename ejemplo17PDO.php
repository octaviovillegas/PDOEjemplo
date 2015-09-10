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
                <h3 class="text-info">Método de instancia para Modificar.</h3>
                    <div class="well well-sm text-info">
                                  class cd
                                    {<br>
                                  public function BorrarCd()
                                     {<br>

                                        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); <br>
                                        $consulta =$objetoAccesoDato->RetornarConsulta("<br>
                                          delete <br>
                                          from cds        <br>
                                          WHERE id=:id"); <br>
                                          $consulta->bindValue(':id',$this->id, PDO::PARAM_INT);   <br> 
                                        return $consulta->execute();<br>

                                     }
                                                                      
                                    }<br>
                                    //utilización del método estático<br>
                                    $unCd =cd::TraerUnCd(4);<br>                                   
                                    $unCd->titulo="titulo cambiado";<br>
                                    $unCd->año=date("his");<br>
                                    $unCd->cantante="cantante cambiado";<br>
                                    $cantidadDeAfectadas=$unCd->BorrarCd();<br>
                                        print("filas afectadas :$cantidadDeAfectadas<br>");



                                    
                    </div>
             </div>
             <h3 >  Método de la clase  </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/cd.php");

                                    $unCd =cd::TraerUnCd(4);
                                  
                                  //verifico si existe
                                    if(isset($unCd->cantante))
                                    {
                                    $cantidadDeAfectadas=$unCd->BorrarCd();
                                    print("filas afectadas :$cantidadDeAfectadas<br>");
                                    }
                                    else
                                    {
                                       print("no existe la instancia<br>");
                                   
                                    }
                                 
                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



