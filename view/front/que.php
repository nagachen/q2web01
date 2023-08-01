<fieldset>
    <legend>目前位置 : 首頁  > 問卷調查</legend>
    <form action="" method="post">
    <table>
        <tr>
        <th>編號</th>
        <th>問卷題目</th>
        <th>投票總數</th>
        <th>結果</th>
        <th>狀態</th>
        </tr>
        <?php
        $subject=$Que->all(['subject_id'=>0]);
            foreach($subject as $idx=>$row){
?>
        <tr>
            <td><?=$idx+1;?></td>
            <td><?=$row['text'];?></td>
            <td><?=$row['vote'];?></td>
            <td><?="<a href='?do=result&id={$row['id']}'>結果</a>";?></td>
            <td><?=(isset($_SESSION['user']))?'我要投票':'請先登入';?></td>

        </tr>

<?php
            }
            ?>

    </table>
    </form>
    
</fieldset>