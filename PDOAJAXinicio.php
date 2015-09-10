<html>
<head>
    <title>PDO ajax</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script src="js/jquery.js"></script>
          <script type="text/javascript">
    
     function TraerCD(id)
    {
            alert(id);
      $.ajax
                ({
                type: "POST",
                url: "PDOAJAXnexo.php",
                data:({
                        QueHacer: "TraerUno",
                        idParaTraer:id
                     }),
                cache: false,
                dataType: "text",
                success:  function (dato)
                         { 
                            alert(" retorno del ajax:"+ dato);
                           
                                    window.location.href="PDOAJAXdestino.php";
                        }// de la funcion success
                });// del ajax

    }
    </script>
   

</head>
    <body>
           <div class="container">
                <div class="page-header">
                    <h1>Ejemplos de PHP y AJAX</h1>      
                </div>



          <input type="button" value="modificar" onclick="TraerCD(4)">
          </div>
    </body>
</html>


   
   

