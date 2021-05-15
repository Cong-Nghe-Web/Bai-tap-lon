<?php include_once('header.php'); ?>
    <h3>Tìm kiếm</h3>
                <ul>
                <?php
                     if(empty($data)){
                        foreach ($data as $val){
                            echo '<li><a href="?c=nguphap&a=bieudien&id='.$val['id'].'"> '.$val['name'].' </a></li>';
                        }
                     } else {
                         echo 'Không tìm thấy';
                     }
                ?>
                </ul>
<?php include_once('footr.php'); ?>