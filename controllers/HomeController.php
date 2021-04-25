<?php
  class HomeController extends Controller {

    public function index() {  
      return view('home/home', ['title'=>'Welcome to practice number 3!']);
    }
  }
?>