<?php
class Home extends Controller{
    // function SayHi() {
    //     $teo = $this->model("SinhVienModel");
    //     echo $teo->GetSV();

    //     //view
    // }

    // function Show($a, $b) {
    //     //model
    //     $teo =$this->model("SinhVienModel");
    //     $tong =$teo->Tong($a, $b);
    //     //view
    //     $this->view("aodep", [
    //         "Page"=>"news",
    //         "Mau"=>"red",
    //         "Number"=>$tong,
    //         "Sothich"=>["a","b","c"],
    //         "SV" =>$teo->SinhVien()
    //         ]); 
    // }

    public $teo;
    public $ty;

    public function __construct() {
        $this->teo = $this->model("SinhVienModel");
        $this->teo = $this->model("SinhVienModel");

    }

    public function SayHi(){
        echo $this->teo->GetSV();
    }

    public function Show(){
        $this->view("aodep",["Page"=>"news","SV"=>$this->teo->NamSinh()]);
    
    }
}
?>         