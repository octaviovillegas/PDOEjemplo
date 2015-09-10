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
                <h3 class="text-info"> fetch((PDO::FETCH_CLASS, "cd") </h3>
                    <div class="well well-sm text-info">
                                 class AccesoDatos
                                  {<br>
                                      private static $ObjetoAccesoDatos;<br>
                                      private $objetoPDO;<br>
                                   
                                      private function __construct()
                                      {<br>
                                          try { <br>
                                              $this->objetoPDO = new PDO('mysql:host=localhost;dbname=cdcol;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));<br>
                                              $this->objetoPDO->exec("SET CHARACTER SET utf8");<br>
                                              } 
                                          catch (PDOException $e) { <br>
                                              print "Error!: " . $e->getMessage(); <br>
                                              die();<br>
                                          }
                                      }
                                   <br><br>
                                      public function RetornarConsulta($sql)
                                      { <br>
                                          return $this->objetoPDO->prepare($sql); <br>
                                      }
                                   <br><br>
                                      public static function dameUnObjetoAcceso()
                                      { <br>
                                          if (!isset(self::$ObjetoAccesoDatos)) {    <br>      
                                              self::$ObjetoAccesoDatos = new AccesoDatos(); <br>
                                          } 
                                          return self::$ObjetoAccesoDatos;<br>        
                                      }
                                   
                                   <br><br>
                                       // Evita que el objeto se pueda clonar<br>
                                      public function __clone()
                                      { <br>
                                          trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR); <br>
                                      }
                                  }
                    </div>
             </div>
             <h3 >  $consulta->setFetchMode(PDO::FETCH_INTO, new cd); </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/cd.php");

                                    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                                    $consulta =$objetoAccesoDato->RetornarConsulta("select  titel as titulo, interpret as cantante,jahr as año from cds ");
                                    $consulta->execute();

                                      $consulta->setFetchMode(PDO::FETCH_INTO, new cd);

                                      foreach(  $consulta as $cd)
                                      { 
                                        
                                        print_r($cd->mostrarDatos());
                                        print("<br>");

                                      }

                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



