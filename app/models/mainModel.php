<?php 
/* Aquí se incluyen funciones o procesos que se 
utilizan mas de una vez, tales como conexion  a base de datos
Construcción del modelo principal*/
  namespace app\models;
  use \PDO;

   if (file_exists(__DIR__."../../config/server.php")){
    //Si existe, entonces se carga
    require_once __DIR__."../../config/server.php";
    }
    class mainModel{
        private $server = DB_SERVER;
        private $db = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASSWORD;

        protected function conectar(){
            $conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->db,$this->user,$this->pass);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        public function obtenerImgSlider(){
            $sql = $this->conectar()->prepare("SELECT * FROM slider where status=1");
            $sql->execute();
            return $sql;
        }

        //Modelo para hacer consultas
        //Dentro de las clases y las heredadas
        protected function  ejecutarConsulta($consulta){
            $sql = $this->conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }
        public function limpiarCadena($cadena){
            $palabras=["</script>","<script src","<script type=",
            "SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP
             TABLE","DROP DATABASE","TRUNCATE TABLE","SHOW TABLES","SHOW DATABASES","<?
             php","?>","--","^","<",">","==","=",";","::"];

             $cadena=trim($cadena);
             $cadena=stripslashes($cadena);

             foreach($palabras as $palabra){
                $cadena=str_ireplace($palabra, "",$cadena); 

             }

             $cadena=trim($cadena);
             $cadena=stripslashes($cadena);

             return $cadena; 
        }

        protected function verificarDatos($filtro,$cadena){
            if(preg_match("/^".$filtro."$/", $cadena)){
                return false;
            }else{
                return true;
            }
        }

        protected function guardarDatos($tabla,$datos){
            
            $query="INSERT INTO $tabla (";

            $C=0;
            foreach($datos as $clave){
               if($C>=1){$query.=","; }
               $query.=$clave["campo_nombre"];
               $C++;
            }

            $query.=") VALUES(";

            $C=0;
            foreach($datos as $clave){
               if($C>=1){$query.=","; }
               $query.=$clave["campo_marcador"];
               $C++;
            }

            $query.=")";
            $sql= $this->conectar()->prepare($query);

            foreach($datos as $clave){
                $sql->bindParam($clave["campo_marcador"],
                $clave["campo_valor"]);
            }

            $sql->execute();

            return $sql;

        }

        public function seleccionarDatos($tipo,$tabla,$campo,$id){
            $tipo=$this->limpiarCadena($tipo);
            $tabla=$this->limpiarCadena($tabla);
            $campo=$this->limpiarCadena($campo);
            $id=$this->limpiarCadena($id);

            if($tipo=="Unico"){
                $sql= $this->conectar()->prepare("SELECT * FROM $tabla WHERE 
                $campo=:ID");
                $sql->bindParam(":ID",$id);
            }elseif($tipo=="Normal"){
                $sql=$this->conectar()->prepare("SELECT $campo FROM
                $tabla");

            }
            $sql->execute();

            return $sql;
        }


        protected function actualizarDatos($tabla,$datos,$condicion){
            $query="UPDATE $tabla SET ";

            $C=0;
            foreach($datos as $clave){
               if($C>=1){$query.=","; }
               $query.=$clave["campo_nombre"]."=".$clave["campo_marcador"];
               $C++;
            }

            $query.="WHERE ".$condicion["condicion_campo"]."=".$condicion
            ["condicion_marcador"];

            $sql= $this->conectar()->prepare($query);

            foreach($datos as $clave){
                $sql->bindParam($clave["campo_marcador"],
                $clave["campo_valor"]);
            }
            $sql->bindParam($condicion["condicion_marcador"],$condicion
            ["condicion_marcador"]);

            $sql->execute();

            return $sql;
        }

        public function mascotasDatos(){
            $sql = $this->conectar()->prepare("SELECT * FROM tblmascota");
            $sql->execute();
            return $sql;
        }

        public function misionDatos(){
            $sql = $this->conectar()->prepare("SELECT * FROM tblempresa");
            $sql->execute();
            return $sql;
        }


    }


?> 