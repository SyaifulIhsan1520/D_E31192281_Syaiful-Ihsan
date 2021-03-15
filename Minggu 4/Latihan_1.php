<?php

class mobiLengkap {
    public function nontonTV()
    {
        return "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }
}

class MobilBMW extends mobiLengkap {

}

class MobilBMWberaksi {
    public function nontonTV()
    {
        return "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }

    public function HidupkanMobil()
    {
        return "Kunci diputar kekanan, Mesin melakukan starter, Mobil menyala";
    }

    public function MatikanMobil()
    {
        return "Kunci diputar kekiri, Mesin mati, Mobil mati";
    }

    public function ubahGigi()
    {
        return "Koplik diinjak, Perseneling diubah, Gigi mobil berganti";
    }
}
