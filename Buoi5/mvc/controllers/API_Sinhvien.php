<?php
class API_Sinhvien extends Controller{
    public function DanhSach(){
        
        // Model
        $sinhvien = $this->model("SinhVienModel");
        $sv = $sinhvien->SinhVien();
        $mang = [];

        while($s = mysqli_fetch_array($sv)){
            array_push($mang, new SinhVien(
                $s["ID"], 
                $s["HOTEN"], 
                $s["NAMSINH"]
            ));
        }

        echo json_encode($mang);
    }
}


?>