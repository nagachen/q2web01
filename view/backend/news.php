<form action="./api/news_admin.php" method="post">
    <table class="ct" style="width:75%;margin:auto">
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
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>    
    <?php
        }
    ?>
    </table>
    <div class="ct"><?=$links;?></div>

    <div class="ct">
    <input type="submit" value="確定修改">
</div>
</form>