<?php
if(!empty($_GET['id']))
{
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'id15995037_dixonraw';
    $Password = 'Fotografia_09';
    $dbName = 'id15995037_dixonphotography';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error)
        die("Connection failed: " . $db->connect_error);
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT foto FROM fotos WHERE id_foto = {$_GET['id']}");
    
    if($result->num_rows > 0)
    {
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['foto']; 
    }
    else
        echo 'Imagen no existe...';
}
?>