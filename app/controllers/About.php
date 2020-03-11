<?php

class About extends Controller {
  public function index($nama= 'Deswanto', $pekerjaan='Web Developer', $umur='26')
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $this->view('about/index', $data);
  }
  public function page()
  {
    $this->view('about/page');
  }
}