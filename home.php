<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   <Style>
        body{

         font-family: Arial, Helvetica, sans-serif;
         background-image: linear-gradient(to left, rgb(16,97,46),rgb(54,67,199));
            }

             .box{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0,0, 0, 0.5);
                padding: 30px;
                border-radius: 15px;

            }
            a{
                text-decoration: none;
                color:dodgerblue;
               border: 3px solid;
               padding: 10px;
               border-radius: 10px ;
               
               
            }
            a:hover{
                color: blue;
            }
            #labels{
                position: absolute;
                left: 45%;
            }

   </Style>
</head>
<body>
    <div id="labels">
      <h1>ola pessoal<h1>
        <h2>tudo bem?<h2>
        </div>

        <div class="box">
            <a href="login.php">Login</a>
            <a href="formulario.php">Cadastrar</a>
        </div>

</body>
</html>

