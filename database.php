<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);//buatlah koneksi secara OOP
		//mysqli_select_db($this->db);

	}

	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT * FROM user");

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$film,$wisata){
		mysqli_query($this->conn,"INSERT INTO user VALUES('','$nama','$alamat','$usia','$film','$wisata')");
		$genre = implode(",", $film);
		$tempatwisata = implode(",", $wisata);

		//buatlah method input
		//query inset into user
	}

	function hapus($id){
		mysqli_query($this->conn,"DELETE FROM user WHERE id='$id'");
		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn,"SELECT * FROM user WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$film,$wisata){
		$genre = implode(", ", $film);
		$ws = implode(", ", $wisata);
		mysqli_query($this->conn,"UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia', film='$genre', wisata='$ws' WHERE id='$id'");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}

}

?>
