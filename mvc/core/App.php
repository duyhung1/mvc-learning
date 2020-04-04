<?php
class App {
//http://localhost/live/Home/SayHi/1/2/3
    protected $controller ="Home";
    protected $action ="SayHi";
    protected $param =[];

    function __construct() {
         $arr = $this->UrlProcess();
         //echo json_encode($arr);die();
        //Xu ly controller
        //kiem tra file co ton tai k
        if(isset($arr) && file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
        
        //xu ly action
        if(isset($arr[1])) {
            //kiem tra trong function co bien nay k
            if(method_exists($this->controller, $arr[1])){
                $this->action = $arr[1]; 
            }
            unset($arr[1]);
        }

        //xu ly params
        $this->param =$arr?array_values($arr):[];//gan param bang mang arr neu ton tai gia tri trong arr, con khong thi la rong
        //ten lop: controller va tham so la action, hamf chay param (tao ra bien co kieu la controller, chay ham SayHi(action) va tham so chuyen vao la param)
        call_user_func_array([$this->controller, $this->action], $this->param);

    }


    function UrlProcess() {
        //Home/SayHi/1/2/3
        if(isset($_GET["url"])){
           return explode("/", filter_var(trim($_GET["url"], "/"))); //tach string ngan cach boi "/". trong laf xu ly string nhu xoa cac khoang trang
        }
    }
}

?>