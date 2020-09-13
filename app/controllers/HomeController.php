<?php
    class HomeController extends Controller{
        
        public function index()
        {
            $items = $this->model('product')->get();

            $this->view('home/index', ['products'=>$items]);
        }
    }



?>