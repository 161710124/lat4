<?php

class makanan
{
	public $nama,$kadaluwarsa,$harga;

	public function __construct($nama,$kadaluwarsa,$harga)
	{
		$this->nama=$nama;
		$this->kadaluwarsa=$kadaluwarsa;
		$this->harga=$harga;

	}
	public function get_nama(){
		return $this->nama;
	}
		public function get_kadaluwarsa(){
		return $this->kadaluwarsa;
	}
	public function get_harga(){
		return $this->harga;
	}

}
?>