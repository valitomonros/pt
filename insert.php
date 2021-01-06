<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<nav class="nav">
       
       <ul>
           <li><a href="index.php"> Home</a></li>
           <li><a href="insert.php"> Insertar </a></li>
           <li><a href="listar.php"> listar-fuentes</a></li>
           <li><a href="create-format.php"> Create-Format</a></li>
       
       </ul>
    </nav>
    <div class="frm">
            <div class="title">
                DATOS DEL LIBRO
            </div>
            <form action="mostrar.php" method="post" id="formulario">
                
                    
                <div class="sectionfrm">
                    <label for="titulo">Título</label>
                    <input type="text" placeholder="ingresa titulo de libro" id="titulo" name="titulo">
                </div>
                <div class="sectionfrm">
                    <label for="autor">Autor</label>
                    <input type="text" placeholder="Ingrese el autor del libro" id="autor" name="autor">

                </div>
                <div class="sectionfrm">
                    <label for="Pagina">Páginas</label>
                    <input type="text" placeholder="Ingresa numero de paginas" id="paginas" name="paginas">
                </div>
                <div class="sectionfrm">
                    <label for="editorial">Editorial</label>
                    <input type="text" placeholder="Ingrese editorial" id="editorial" name=editorial>
                </div>
                <div class="respuesta sectionfrm">
                </div>

                <div class="sectionfrm">
                    <input type="hidden" value="insertar" id="insertar">
                    <input type="submit" value="Enviar datos" id="formbtn">
                </div>
                
            </form>        
    </div>

    <script src="js/index.js"></script>
</body>
</html>