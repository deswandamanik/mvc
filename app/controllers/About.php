<?php

class About extends Controller {
  public function index($nama= 'Deswanto', $pekerjaan='Web Developer')
  {
    $this->view('about/index');
  }
  public function page()
  {
    $this->view('about/page');
  }
}