<?php
class Votante{
	private $id;
	private $apellidos;
	private $nombres;
	private $foto;
	private $sexo;
	private $n_dui;
	private $fecha_expedicion;
	private $residencia;
	private $depto;
	private $municipio;

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id= $id;
	}

	public function getApellidos(){
		return $this->apellidos;
	}
	public function setApellidos($apellidos){
		$this->apellidos= $apellidos;
	}

	public function getNombres(){
		return $this->nombres;
	}
	public function setNombres($nombres){
		$this->nombres= $nombres;
	}

	public function getFoto(){
		return $this->foto;
	}
	public function setFoto($foto){
		$this->foto= $foto;
	}

	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo= $sexo;
	}

	public function getN_dui(){
		return $this->n_dui;
	}
	public function setN_dui($n_dui){
		$this->n_dui= $n_dui;
	}

	public function getFecha_expedicion(){
		return $this->fecha_expedicion;
	}
	public function setFecha_expedicion($fecha_expedicion){
		$this->fecha_expedicion= $fecha_expedicion;
	}

	public function getResidencia(){
		return $this->residencia;
	}
	public function setResidencia($residencia){
		$this->residencia= $residencia;
	}

	public function getDepto(){
		return $this->depto;
	}
	public function setDepto($depto){
		$this->depto= $depto;
	}

	public function getMunicipio(){
		return $this->municipio;
	}
	public function setMunicipio($municipio){
		$this->municipio= $municipio;
	}
}