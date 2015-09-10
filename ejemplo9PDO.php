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
                <h3 class="text-info"> Clase CD, con métodos staticos y de instancia </h3>
                    <div class="well well-sm text-info">
                                  class cd
                                    {<br>
                                      public $titulo;<br>
                                      public $cantante;<br>
                                      public $año;<br>
                                      public function mostrarDatos()
                                      {<br>
                                          return "Metodo mostar:".$this->titulo."  ".$this->cantante."  ".$this->año;<br>
                                      }


<br><br>
                                      public static function TraerTodoLosCds()
                                      {<br>
                                          $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); <br>
                                          $consulta =$objetoAccesoDato->RetornarConsulta("select titel as titulo, interpret as cantante,jahr as año from cds");<br>
                                          $consulta->execute();<br>
                                          
                                          
                                          return     $consulta->fetchAll(PDO::FETCH_CLASS, "cd");   <br>
                                      }<br>

                                    
                                    
                                    }<br>
                                    //utilización del método estatico<br>
                                      $ArrayDeCds =cd::TraerTodoLosCds();<br>
                                      foreach(  $ArrayDeCds as $cd)
                                      {   <br>                                      
                                        print_r($cd->mostrarDatos());<br>
                                      }<br>

                                    
                    </div>
             </div>
             <h3 >  Método de la clase  </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/cd.php");

                                     $ArrayDeCds =cd::TraerTodoLosCds();

                                     

                                      foreach(  $ArrayDeCds as $cd)
                                      { 
                                        
                                        print_r($cd->mostrarDatos());
                                        print("<br>");

                                      }

                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



