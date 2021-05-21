<?php include_once('header.php'); ?>
                <h3>Review tense</h3>
                <ul>
                    <?php
                        foreach ($data as $val) {
                            echo $val['ID'].". ".$val['Question']."<br>".$val['A']."<br>".$val['B'].
                                    "<br>".$val['C']."<br>".$val['D']."<br><br>";
                        }    
                    ?>
                </ul>
    
<?php include_once('footer.php'); ?>


