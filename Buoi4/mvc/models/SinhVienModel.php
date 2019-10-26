<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function DSSV(){
        return mysqli_query($this->con, "SELECT * FROM sinhvien");
    }

}
?>