<?php
class Home extends Controller{

    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

    }

    function Show($a, $b){

        // Model
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // View
        $this->view("aodep", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
?>