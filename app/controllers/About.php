<?php

class About {
  public function index($nama= 'Deswanto', $pekerjaan='Web Developer')
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}