<form action="./api/news_admin.php" method="post">
    <table>
        <tr>
            <th>編號</th>
            <th>標題</th>
            <th>顯示</th>
            <th>刪除</th>

        </tr>
    <?php
       
        foreach($rows as $idx=>$row){
   
    ?>
    <tr>
            <td><?=$idx+1;?></td>
            <td><?=$row['title'];?></td>
            <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" 
            <?=($row['sh']==1)?'checked':'';?>></td>

            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>" 
            ></td>
            </tr>    
    <?php
        }
    ?>
    </table>
    <div class="ct"><?=$links;?></div>
</form>