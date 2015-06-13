<?php

class votacion {
    private $id;    
    private $usuario;
    private $clave;
    private $nombre;

    //----------------------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    //-----------------------------------------------------------------------------------------------------------------------
          /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $nombre
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    //------------------------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
//------------------------------------------------------------------------------------------------------------------------------
     /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $porcentage
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }
//-------------------------------------------------------------------------------------------------------------------------------------
 //------------------------------------------------------------------------------------------------------------------


}
