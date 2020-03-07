<?php

class App {
  public function __construct()
  {
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL()
  {
    if(isset($_GET['url'])){
      //menghilangkan tanda "/"di url
      $url = rtrim($_GET['url'],'/');
      //memberikan filter agar bersih dari karakter aneh, url tidak mudah di serang
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // memecah url berdasarkan tanda "/",string berubah jadi element array
      $url = explode('/', $url);
      return $url;
    }
  }

}