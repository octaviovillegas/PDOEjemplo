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

             <h3 class="text-info"> fetchAll</h3>
             <div class="well well-sm text-info">
                     $resultado = $sql->fetchall();<br />
                           foreach($resultado as $fila)
                            {
                              echo "titulo: ".$fila[0];<br />
                              echo "-- Año: ".$fila[2];<br />
                              echo "-- Cantante: ". $fila['cantante'];<br />

                            }
                                      
            </div>   



            </div>
                    <?php
                        try
                        {

                          $db = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                          $sql = $db->query('SELECT titel as titulo,interpret as cantante, jahr as año  FROM cds ');

                          
                          $catidadFilas = $sql->rowCount();


                          echo "cantidad de filas: ".$catidadFilas."<br>";


                          $resultado = $sql->fetchall();
                       
                          
                            foreach($resultado as $fila)
                            {
                              echo "titulo: ".$fila[0];
                              echo "-- Año: ".$fila[2];
                              echo "-- Cantante: ". $fila['cantante'].'<br />';

                            }

                          
                         
                        } 
                        catch(PDOException $ex)
                        {
                          echo "error ocurrido!"; 
                            echo $ex->getMessage();
                        }
                    ?>

                    <a class="btn btn-info" href="indexPDO.html">Menu principal</a>

                  </div>

    </body>
</html>



