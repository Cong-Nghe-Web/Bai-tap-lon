<?php include_once('header.php'); ?>
    <h3>Review tense</h3>    
    <script type="text/javascript">
    function check()
    {
        var count = 0;
        foreach($data as $val){
            if (document.myform.".$val['ID'].".value === $val['Answer'])
                count++;
        }
//        if (document.myform.1.value === $data['Answer']{ count++;}
        var b=document.querySelector(".points");
	b.innerHTML = "Điểm:" + "  " + count;
    }
    </script>
    <form name='myform'>
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
        <input  type="button" class="search-button" value="Kiểm tra đáp án" onclick="check()">
    </form>
<?php include_once('footer.php'); ?>


