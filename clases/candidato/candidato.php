<?php


class votacion {
    private $id;
    private $dui;
    private $apellidos;
    private $nombres;
    private $genero;
    private $departamento;
    private $municipio;
    private $partido;
    private $departamentocand;
    private $municipiocand;
    private $cargo;
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
//---------------------------------------------------------------------------------------------------------------------------
      /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $nombre
     */
    public function setApellido($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    //------------------------------------------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombres)
    {
        $this->nombres = $nombres;
    }
//------------------------------------------------------------------------------------------------------------------------------
    /**
     * @return mixed
     *
    *public function getFoto()
    *{
    *    return $this->imagen;
    *}
*
 *   /**
     * @param mixed $num_preguntas
     */
   /* public function setFoto($imagen)
   {
        $this->imagen = $imagen;
    }
    */
//----------------------------------------------------------------------------------------------------------------------------------
    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $porcentage
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
//-------------------------------------------------------------------------------------------------------------------------------------
    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @param mixed $materia
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
//------------------------------------------------------------------------------------------------------------------------------------
      /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $nombre
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }
//--------------------------------------------------------------------------------------------------------------------------------------
       /**
     * @return mixed
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * @param mixed $id
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;
    }
//----------------------------------------------------------------------------------------------------------------------------------------
       /**
     * @return mixed
     */
    public function getDepartamentocand()
    {
        return $this->departamentocand;
    }

    /**
     * @param mixed $id
     */
    public function setDepartamentocand($departamentocand)
    {
        $this->departamentocand = $departamentocand;
    }
//-----------------------------------------------------------------------------------------------------------------------------------------
       /**
     * @return mixed
     */
    public function getMunicipiocand()
    {
        return $this->municipiocand;
    }

    /**
     * @param mixed $id
     */
    public function setMunicipiocand($municipiocand)
    {
        $this->municipiocand = $municipiocand;
    }
//------------------------------------------------------------------------------------------------------------------------------------------
       /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $id
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }


}
