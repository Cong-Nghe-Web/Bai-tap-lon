<?php include_once('header.php'); ?>
<?php
    echo  'Điểm của bạn là: '.$data.'<br>';
    echo 'Những câu bạn sai: ';
    foreach ($data2 as $w){
        echo $w.' ';
    }
?>
<?php include_once('footer.php'); ?>