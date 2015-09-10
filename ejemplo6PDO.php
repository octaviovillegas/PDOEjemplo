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
                <h3 class="text-info"> fetch((PDO::FETCH_CLASS, "cd") ,  fetchObject('cd')</h3> 
                <div class="well well-sm text-info">
                                  class cd
                                  {<br>
                                    public $titulo;<br>
                                    public $cantante;<br>
                                    public $año;<br>
                                    public function mostrarDatos()<br>
                                    {return "Metodo mostar:".$this->titulo."  ".$this->cantante."  ".$this->año;}

                                  }

                            <br><br> $arrayResultado= $sql->fetchAll(PDO::FETCH_CLASS, "cd");<br>

                            foreach ($arrayResultado as $cdRecorrido) {<br>

                              echo $cdRecorrido->mostrarDatos();
                              <br>
                            }
                             <br> <br>


                              while( $cd= $sql->fetchObject('cd'))
                              {  <br>
                                print_r($cd->titulo); <br>
                                print_r($cd->cantante); <br>
                                print_r($cd->mostrarDatos());<br>

                              }
                </div>
             </div>
            <?php
              class cd
              {
                public $titulo;
                public $cantante;
                public $año;
                public function mostrarDatos()
                {return "Metodo mostar:".$this->titulo."  ".$this->cantante."  ".$this->año;}

              }
              try
              {

                  $db = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $sql = $db->query('SELECT titel as titulo,interpret as cantante, jahr as año  FROM cds ');

                $catidadFilas = $sql->rowCount();
                

                echo "cantidad de filas: ".$catidadFilas."<br>";

                
      
          
                echo "<h3> fetchAll(PDO::FETCH_CLASS, 'cd');</h3></br>";

                $arrayResultado= $sql->fetchAll(PDO::FETCH_CLASS, "cd");

                foreach ($arrayResultado as $cdRecorrido) {

                  echo $cdRecorrido->mostrarDatos();
                  echo  "<br>";
                }
  


                  echo "<h3> fetchObject('cd')</h3></br>";
                  
                  $sql = $db->query('SELECT titel as titulo,interpret as cantante, jahr as año  FROM cds ');
                  while( $cd= $sql->fetchObject('cd'))
                  { 
                    print_r($cd->titulo);
                    print_r($cd->cantante);
                    print_r($cd->mostrarDatos());
                    print("<br>\n");

                  }



                 

                } catch(PDOException $ex)

                 {
                  echo "error ocurrido!"; //user friendly message
                    echo $ex->getMessage();
                }

                 

?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



