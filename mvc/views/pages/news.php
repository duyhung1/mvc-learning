
<?php
// $row = mysqli_fetch_array($data["SV"]);
// for($i=0;$i<count($row);$i++){
//     echo $row["hoten"];
// }
while($row = mysqli_fetch_array($data["SV"])){
    echo $row["hoten"];//."-".$row["namsinh"];
}
?>