<?php

class Personne {
	public $prenom;
	public $nom;
	private $date;
	private $date2;

	function __construct($prenom,$nom,$date2=NULL){
		$this->prenom = $prenom;
		$this->nom = $nom;
		if ($date2==NULL){
			$this->date2= date("Y-m-d");
		} else {
			$this->date2= $date2;
		}
		#$this->dates2 = $date2;
	}

	function setDate($d){
		//faire tous les controle sur la date stocker dans l'argument $d
		list($y,$m,$j) = explode("-", $d);
		if (checkdate($m,$j,$y)){
			$this->date = $d;
		} else {
			throw new Exception("Date invalide", 1);
					
		}	
	}

	function getDate(){
		return $this->date;
	}

	function getAge(){
		$y = date('Y');
		$m = date('m');
		$j = date('j');
		$a = new DateTime($this->date);
		$y1 = $a->format('Y');
		$m1 = $a->format('m');
		$j1 = $a->format('m');
		#$var = 0;
		if ($m1>$m){
			$var = 1;
		} elseif ($m=$m1 and $j1>$j) {
			$var = 1;
		} else {
			$var = 0;	
		}
		
		$res = ($y-$y1)-$var;
		return $res;
	}



}



?>