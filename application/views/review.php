<?php include_once('header.php'); ?>
    <h3>Review tense</h3>    
    <form  action='<?php echo " ?c=review&a=check"?>' name='myform' method='POST' >
    <ul>
    <?php
        foreach ($data as $val) {
            echo $val['ID'].'.'. $val['Question'].'</br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="A">'.$val['A'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="B">'.$val['B'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="C">'.$val['C'].'<br><br>';
            echo '<input type="radio" name="'.$val['ID'].'" value="D">'.$val['D'].'<br><br>';
        }    
    ?>
    </ul>
        <input  type="submit" class="search-button" value="Kiểm tra đáp án">
    </form>
    <div class="points"></div>
<?php include_once('footer.php'); ?>


