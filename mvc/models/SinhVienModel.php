<?php
class SinhVienModel extends DB{
    public function GetSV(){
        //connect db
        return "Phung Duy Hung";
    }


    // public function SinhVien(){
    //     $qr = "SELECT * FROM sinhvien";
    //     return mysqli_query($this->con,$qr);
    // }
    public function NamSinh() {
        $qr1 = "SELECT hoten FROM sinhvien";
        return mysqli_query($this->con,$qr1);
    }
}

?>