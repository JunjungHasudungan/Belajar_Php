<?php 

	class Product {

	public $diskon = 0;
	public $harga = 0;

	public function setHarga($hargaAwal)
	{
		$this->harga = $hargaAwal;
	}

/*	public function setDiskon($hargaDiskon)
	{
		$this->dison = $hargaDiskon;
	}*/

	public function getHarga()
	{
		return $this->harga;
	}
	public function getTotal()
	{
		// memanggil hargaAwal

		$hasil = $this->harga * ($this->diskon / 100);
		return $hasil;
	}
}
	$buku = new Product;
	echo $buku->getHarga();
	$buku->setHarga(40000);

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
 