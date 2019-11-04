<html>
    <head>
        <title> Update PHP MySQL </title>
    </head>
    <body>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $row['id']?>" name="id">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" value="<?php echo $row['nim'];?>" name="nim"> </td>    
                 </tr>
                 <tr>
                     <td>Nama</td>
                     <td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
                 </tr>
                 <tr>
                     <td>Jenis Kelamin</td>
                     <td>
                        <input type="radio" name="jk" value="Pr" <?php echo active_radio_button("P", $row['jk'])?>>Perempuan
                        <input type="radio" name="jk" value="Lk" <?php echo active_radio_button("L", $row['jk'])?>>Laki-laki
                    </td>
                 </tr>
                 <tr>
                    <td>Hobi <?php echo $row['hobi'];?></td>
                    <td><select name="hobi"><?php
                                                foreach ($hobi as $h){
                                                    echo "<option value='$h' ";
                                                    echo $row['hobi']==$h? 'selected="selected':'';
                                                    echo ">$h</option>";
                                                }
                                            ?>
                        </select>
                    </td>
                 </tr>
            </table>
        </form>
    </body>
</html>