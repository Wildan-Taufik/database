<?php

  /**
   *
   */
  class Error extends Controller
  {

    function __construct()
    {
      parent::__construct();
      Session::init();
    }

    function index()
    {
      $this->view->msg = 'Halaman tidak ditemukan!';
      $this->view->render('error/index');
    }
  }

?>
