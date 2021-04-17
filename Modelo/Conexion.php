<?php
    class Conexion{
        
        private $con;
        
        //Constructiro de conexión a BDD
        public function __construct(){
            $this->con = new mysqli(
                'localhost',
                'id15995037_dixonraw',
                'Fotografia_09',
                'id15995037_dixonphotography'
            );
        }

        //Función para registrar citas
        public function setCita(){
            if(isset($_POST['boton'])){
                if(strlen($_POST['nombre']) >= 1
                && strlen($_POST['telefono']) > 1
                && strlen($_POST['correo']) >= 1){
                    $Nombre_cliente = $_POST['nombre'];
                    $Telefono_cliente = $_POST['telefono'];
                    $Email_cliente = $_POST['correo'];
                    $Fecha_cita = $_POST['fecha'];
                    $Descripcion_cita = $_POST['evento'];

                    $consulta=$this->con->query(
                        "INSERT INTO citas(nombre_cliente, telefono, correo, fecha_evento, evento)
                        VALUES (
                            '$Nombre_cliente',
                            '$Telefono_cliente',
                            '$Email_cliente',
                            '$Fecha_cita',
                            '$Descripcion_cita'
                        )"
                    );
                }
            }
        }

        //Función para mostrar tabla de citas
        public function getCitas(){
            $Sentencia_query = $this->con->query('SELECT * FROM citas');
            
            $retorno = [];

            $i = 0;
            while($fila = $Sentencia_query->fetch_assoc()){
                $retorno[] = $fila;
                $i++;
            }

            return $retorno;
        }
    }
?>