<h2>
<?php
echo $data["SoThich"][1];
?>
</h2>

<?php
while($r = mysqli_fetch_array($data["SV"])){
    echo $r["HOTEN"];
}
?>
