<?php

class Mahasiswa_model {
  private $mhs = [
    [
      "nama" => "Deswanto Damanik",
      "nim" => "1813070033",
      "email" => "deswandamanik@gmail.com",
      "jurusan" => "Sistem Informasi"
    ],
    [
      "nama" => "Agus Surbakti",
      "nim" => "1813070034",
      "email" => "agus@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "leonora Pandiangan",
      "nim" => "1813070035",
      "email" => "leonora@gmail.com",
      "jurusan" => "Sistem Informasi"
    ]
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }


}