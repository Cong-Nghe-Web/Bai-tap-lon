<?php include_once('header.php'); ?>
<h3>Các phản hồi</h3>
    <table style=" border:1px solid #ffaa56;width:100%;">
        <tr>
            <th style=" border:1px solid #ffaa56;;width:30%;">Tài khoản</th>
            <th style=" border:1px solid #ffaa56">Phản hồi</th>
        </tr>
    <?php
        foreach ($data as $val){
            echo '
                <tr>
                    <td style=" border:1px solid #ffaa56">'.$val['iduser'].'</td>
                    <td style=" border:1px solid #ffaa56">'.$val['phanhoi'].'</td>
                </tr>';
        }
    ?>
    </table>
    <h4>Bạn có muốn phản hồi</h4>
    <form action="?index.php?c=phanhoi&a=add" >
		<input type="textarea" rows="9" cols="70" class="search-box" placeholder="Hãy phản hồi vào đây?" name="phanhoi" required><br>
        <input type="submit" formmethod="post" class="search-button" value="Phản hồi" >
					  
	</form>
<?php include_once('footer.php'); ?>
