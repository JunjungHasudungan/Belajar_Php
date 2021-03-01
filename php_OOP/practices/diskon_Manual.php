<?php 

	class Product {

	public $diskon;
	public $harga;

	public function setHarga($hargaAwal)
	{
		
		$this->harga = $hargaAwal;
	}

	public function __construct()
	{
		$this->harga = 1000;
		$this->diskon = 30;
	}

/*	public function setDiskon($hargaDiskon)
	{
		$this->dison = $hargaDiskon;
	}*/

	public function getHarga()
	{
		$all = "Harga awal : {$this->harga}<br>
				Potongan Diskon: {$this->diskon} %";
		return $all;
	}
	public function getTotal()
	{
		// memanggil hargaAwal

		$hasil = $this->harga * ($this->diskon / 100);
		return $hasil;
	}
}
	$buku = new Product;
	// echo "harga awal per-item: ".$buku->getHarga();
	echo $buku->getHarga();
	echo "<br>";
	echo "harga setelah diskon: ".$buku->setHarga(40000);

	$buku->diskon = 10;

	// pengkondisian
	if($buku->diskon == 10){
		echo "total harga setelah diskon adalah: ".number_format($buku->getTotal());
	}
	elseif ($buku->diskon == 20) {
		echo number_format($buku->getTotal());
	}
	else{
		echo 'Tidak ada nilai';
	}
 