<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/create.css">
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
            <h1 class="title2">Ordenar formato</h1>
        </section>
        <section class ="seleccion">
            <div>
                <form action="">
                    <div class="bloque">
                        <label for="titulo">Título</label>
                        <input type="checkbox" name="titutlo" value="titulo" id="titulo">
                    </div>
                    <div class="bloque">
                        <label for=autor>Autor</label>
                        <input type="checkbox" name="autor" value="autor" id="autor">
                    </div>
                    <div class="bloque">
                        <label for="paginas">Páginas</label>
                        <input type="checkbox" name="paginas" value="paginas" id="paginas">
                    </div>
                    <div class="bloque">
                        <label for="editorial">Editorial</label>
                        <input type="checkbox" name="editorial" value="editorial" id="editorial">
                    </div>

                </form>
            </div>
            <div class= "ver-orden">
                <div class="orden">

                </div>
                <button class = "crear" id="crear">Crear Formato</button>
            </div>
            <div class="listar">
                <div class=containerListar>
                
                </div>
            </div>
        </section>
        
    </main>

    <footer></footer>
    <script src="js/ajax.js"></script>
</body>
</html>


