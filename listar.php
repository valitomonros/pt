<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <?php
        include("dbconexion/conexiondb.php");
    ?>
    <nav class="nav">
       
       <ul>
           <li><a href="index.php"> Home</a></li>
           <li><a href="insert.php"> Insertar </a></li>
           <li><a href="listar.php"> listar-fuentes</a></li>
           <li><a href="create-format.php"> Create-Format</a></li>
       
       </ul>
    </nav>
   

    <main>
        <section>
            <h1 class="title2">Actualizar o eliminar alguna fuente</h1>
        </section>
        <section class ="seleccion">
            <div class="elementos">
                <table>
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Páginas</th>
                            <th>Editorial</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        
                       
                        
                    </tbody>
                </table>
            </div>
        </section>
        <div id="modal">
  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nihil id commodi ipsa vitae dolore molestiae minus enim. Nulla ut recusandae nemo quam autem minus totam impedit, quod accusamus optio?</p>
</div>
        
    </main>
    

    <footer></footer>
    <script src="js/update-delete.js"></script>
</body>
</html>