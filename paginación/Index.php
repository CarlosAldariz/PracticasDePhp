<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
    } catch (PDOException $e) { 
        echo "ERROR: ". $e->getMessage(); 
        die();
    } 

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ; 
    $postPorPagina = 5; 

    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0; 

    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

    $articulos->execute(); 
    $articulos = $articulos->fetchAll(); 

    if(!$articulos) { 
        header('Location: index.php');
    } 

    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total'); 
    $totalArticulos = $totalArticulos->fetch()['total']; 

    $numeroPagina = ceil($totalArticulos / $postPorPagina); 

    echo $numeroPagina;

    require 'index.view.php'; 

    ?>
</body>
</html>