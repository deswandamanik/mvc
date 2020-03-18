<?php

class Mahasiswa_model {
  private $dbh; //databse handler
  private $stmt;

  //melakukan koneksi ke data base
  public function __construct()
  {
    //data sour name
    $dsn = 'mysql:host=localhost;dbname=mvc';

    //cek try catch
    try {
      $this->dbh = new PDO ($dsn,'root','');
    } catch(PDOExceptions $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}