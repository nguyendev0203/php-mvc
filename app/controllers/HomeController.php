<?php
    class HomeController extends Controller{
        
        public function index()
        {
            $items = $this->model('product')->get();

            $this->view('home/index', ['products'=>$items]);
        }

        public function create(){
            if(isset($_POST['action'])){
                $newItem = $this->model('Product');
                $newItem->name = $_POST['name'];
                $newItem->create();
                header('location:/home/index');
            }else{
                $this->view('home/create');
            }
        }



        public function detail($product_id){

            $theProduct = $this->model('Product')->find($product_id);
            $this->view('home/detail', $theProduct);
        }



    }



?>