<h2>
<?php
    while($row =mysqli_fetch_array($data["noidung"])){
        echo $row["hoten"];
    }
?>
</h2>