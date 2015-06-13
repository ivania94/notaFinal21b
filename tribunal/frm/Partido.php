<?php
class Partido{
	private $id;
	private $nombre;
	private $dui;
	private $representante;
	private $foto;

	public function getDui(){
		return $this->dui;
	}
	public function setDui($dui){
		$this->dui=$dui;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

		public function getRepresentante(){
		return $this->representante;
	}

	public function setRepresentante($representante){
		$this->representante=$representante;
	}

		public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto=$foto;
	}
}