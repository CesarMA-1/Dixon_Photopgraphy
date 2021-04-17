<?php
if(isset($_POST["submit"])){
    if(strlen($_POST['id_cita']) >= 1 && strlen($_POST['fotografo']) >= 1){
        $id_cita = $_POST['id_cita'];
        $fotografo = $_POST['fotografo'];
        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if($revisar !== false){
            $image = $_FILES['image']['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));
        
            //Credenciales Mysql
            $Host = 'localhost';
            $Username = 'id15995037_dixonraw';
            $Password = 'Fotografia_09';
            $dbName = 'id15995037_dixonphotography';
            
            //Crear conexion con la abse de datos
            $db = new mysqli($Host, $Username, $Password, $dbName);
            
            // Cerciorar la conexion
            if($db->connect_error){
                die("Connection failed: " . $db->connect_error);
            }
            
            
            //Insertar imagen en la base de datos
            $insertar = $db->query("INSERT into fotos (id_citas, id_fotografo, foto) VALUES ('$id_cita','$fotografo', '$imgContenido')");
            // COndicional para verificar la subida del fichero
            if($insertar){
                echo "Archivo Subido Correctamente.";
            }else{
                echo "Ha fallado la subida, reintente nuevamente.";
            } 
            // Sie el usuario no selecciona ninguna imagen
        }else{
            echo "Por favor seleccione imagen a subir.";
        }
    }   
}
?>