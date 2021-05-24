<?php include_once('header.php'); ?>
<!--                <h3>Đề thi</h3>
                <ul>
                    //<?php
//                        foreach ($data as $val){
//                            echo '<li><a href="?c=dethi&a=bieudiendethi&id='.$val['id'].'"> '.$val['name'].' </a></li>';
//                        }
//                    ?>
                </ul>-->

    <h3>Thi tổng hợp</h3>    
    <form  action='<?php echo " ?c=dethi&a=check"?>' name='myform' method='POST' >
    <ul>
    <?php
        $c = 1;

        while ($c <= 15) {
            $i = rand(1, 38); // sinh câu hỏi ngẫu nhiên
            $val = $data[$i];
            echo $c.'.'. $val['Question'].'</br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="A">'.$val['A'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="B">'.$val['B'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="C">'.$val['C'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="D">'.$val['D'].'<br><br>';
            $c++;
        }    
    ?>
    </ul>
        <input  type="submit" class="search-button" value="Kiểm tra đáp án">
    </form>
    <div class="points"></div>


<?php include_once('footer.php'); ?>