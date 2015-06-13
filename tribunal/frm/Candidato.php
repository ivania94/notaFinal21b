<?php
class Candidato{
	private $id;
	private $apellidos;
	private $nombres;
	private $dui;
	private $foto;
	private $candidatura;
	private $partido;
	private $depto;
	private $municipio;
	private $eleccion;

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}

	public function getApellidos(){
		return $this->apellidos;
	}
	public function setApellidos($apellidos){
		$this->apellidos=$apellidos;
	}

	public function getNombres(){
		return $this->nombres;
	}
	public function setNombres($nombres){
		$this->nombres=$nombres;
	}

	public function getDui(){
		return $this->dui;
	}
	public function setDui($dui){
		$this->dui=$dui;
	}

	public function getFoto(){
		return $this->foto;
	}
	public function setFoto($foto){
		$this->foto=$foto;
	}

	public function getCandidatura(){
		return $this->candidatura;
	}
	public function setCandidatura($candidatura){
		$this->candidatura=$candidatura;
	}

	public function getPartido(){
		return $this->partido;
	}
	public function setPartido($partido){
		$this->partido=$partido;
	}

		public function getDepto(){
		return $this->depto;
	}
	public function setDepto($depto){
		$this->depto=$depto;
	}

		public function getMunicipio(){
		return $this->municipio;
	}
	public function setMunicipio($municipio){
		$this->municipio=$municipio;
	}

		public function getEleccion(){
		return $this->eleccion;
	}
	public function setEleccion($eleccion){
		$this->eleccion=$eleccion;
	}

	}