<?php
include("../core/Model.php");
include("../core/Executor.php");
    class Usuario 
    {
        function __construct()
        {
            $this->id = "";
            $this->nombre = "";
            $this->apePaterno = "";
            $this->apeMaterno = "";
            $this->correo = "";
            $this->contrasenia = "";
            $this->foto = "";
        }


        public function add()
        {
            $sql = "INSERT INTO usuario (nombre,apePaterno,apeMaterno,correo,contrasenia,foto) VALUES ";
            $sql .= "('$this->nombre','$this->apePaterno','$this->apeMaterno','$this->correo','$this->contrasenia','$this->foto')";
            Executor::doit($sql);
        }

        public function update()
        {
            $sql = "UPDATE  usuario SET nombre = '$this->nombre' ,apePaterno = '$this->apePaterno',apeMaterno = '$this->apeMaterno',contrasenia = '$this->contrasenia',foto = '$this->foto' WHERE id = '$this->id'  ";
            Executor::doit($sql);
        }

        public static function getAll()
        {
            $sql = "SELECT * FROM usuario";
            $query = Executor::doit($sql);
            return Model::many($query, new Usuario());
        }

        public static function session($correo, $contrasenia)
        {
            $sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasenia = '$contrasenia'";
            $query = Executor::doit($sql);
            return Model::one($query, new Usuario());
        }

        public static function getById($id)
        {
            $sql = "SELECT * FROM usuario WHERE id = '$id'";
            $query = Executor::doit($sql);
            return Model::one($query, new Usuario());
        }
    }

    ##################################################################################################
    class Recuerdo 
    {
        function __construct()
        {
            $this->id = "";
            $this->nombre = "";
            $this->descripcion = "";
            $this->fecha = "";
            $this->hora = "";
            $this->foto = "";
            $this->idUsuario = "";
            $this->status = "";
        }


        public function add()
        {
            $sql = "INSERT INTO recuerdo (nombre,descripcion,fecha,hora,foto,idUsuario,status) VALUES ";
            $sql .= "('$this->nombre','$this->descripcion','$this->fecha','$this->hora','$this->foto','$this->idUsuario','1')";
            Executor::doit($sql);
        }

        public function update()
        {
            $sql = "UPDATE recuerdo SET nombre='$this->nombre', descripcion='$this->descripcion', fecha='$this->fecha', foto='$this->foto' WHERE id='$this->id'";
            Executor::doit($sql);
        }

        public static function delete($id)
        {
            $sql = "UPDATE recuerdo SET status='0' WHERE id='$id'";
            Executor::doit($sql);
        }

        public static function restore($id)
        {
            $sql = "UPDATE recuerdo SET status='1' WHERE id='$id'";
            Executor::doit($sql);
        }

        public static function getAll()
        {
            $sql = "SELECT * FROM recuerdo";
            $query = Executor::doit($sql);
            return Model::many($query, new Recuerdo());
        }

        public static function getById($id)
        {
            $sql = "SELECT * FROM recuerdo WHERE id = '$id'";
            $query = Executor::doit($sql);
            return Model::one($query, new Recuerdo());
        }

        public static function getAllByIdUsuario($id)
        {
            $sql = "SELECT * FROM recuerdo WHERE idUsuario = '$id' AND status='1'";
            $query = Executor::doit($sql);
            return Model::many($query, new Recuerdo());
        }

        public static function getAllDelByIdUsuario($id)
        {
            $sql = "SELECT * FROM recuerdo WHERE idUsuario = '$id' AND status=0";
            $query = Executor::doit($sql);
            return Model::many($query, new Recuerdo());
        }
    }

?>