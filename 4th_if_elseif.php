<!-- รูปแบบทั่วไป -->
<?php
$temp=25;
if($temp >=30){
    echo "<h1>ร้อน</h1>";
}
elseif($temp>=20 && $temp<30){
    echo "<h1>เย็น</h1>";
}
else{
    echo "<h1>หนาว</h1>";
}
?>

<!--อีกรูปแบบ -->
<?php if($temp >=30):?>
    <h1>ร้อน</h1>
<?php elseif($temp>=20 && $temp<30):?>
    <h1>เย็น</h1>
<?php else:?>
    echo "<h1>หนาว</h1>";
<?php endif;?>