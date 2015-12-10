<?php
class ResultSet{
	public $SetName;
	public $SetValue;
	public function __construct($name, $value){
		$this->SetName=$name;
		$this->SetValue=$value;
	}
	public function GetName(){
		echo $this->SetName;
	}
	public function SetName($name){
		$this->SetName=$name;
		return $this->SetName;
	}
	public function GetValue(){
		echo $this->SetValue;
	}
	public function SetValue($value){
		$this->SetValue=$value;
		return $this->SetValue;
	}
	}
?>