<!DOCTYPE html>
<html>
     <head>
        
    <body>
      <div class="container">
            <div class="page-header">
                <h1>Ejemplos de PHP</h1>      
            </div>
            <div class="jumbotron">

             <h3 class="text-info"> fetchAll</h3>
            



            </div>
                    <?php
                        try
                        {

                          $db = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                          $sql = $db->query('SELECT titel as titulo,interpret as cantante, jahr as año  FROM cds ');

                          
                          $catidadFilas = $sql->rowCount();


                          echo "cantidad de filas: ".$catidadFilas."<br>";


                          
                         
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



