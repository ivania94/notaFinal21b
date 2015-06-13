<?php


class votacion {
    private $id;    
    private $partido;
    private $imagen;
    private $dui;
    private $responsable;

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
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * @param mixed $nombre
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;
    }
    //------------------------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $nombre
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    //-------------------------------------------------------------------------------------------------------------------------------------
      /**
     * @return mixed
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * @param mixed $nombre
     */
    public function setDui($dui)
    {
        $this->dui = $dui;
    }
//------------------------------------------------------------------------------------------------------------------------------
     /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param mixed $porcentage
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

//---------------------------------------------------------------------------------------------------------------------------

}
