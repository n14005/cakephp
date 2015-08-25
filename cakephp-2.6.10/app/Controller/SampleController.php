
<?php
App::uses('AppController', 'Controller');

class SampleController extends AppController {
    
  public function index() {
    $this ->set("title_for_layout","Index Page");
    $this ->set("msg","hello!");
    $this ->set("datas",array("One","Two"));
    }
  }
