<?php
class Home extends Controller{
    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

        // view
        
    }

    function Show($a, $b){
        $teo = $this->model("SinhVienModel");
        echo $teo->Tong($a, $b);
    }
}
?>