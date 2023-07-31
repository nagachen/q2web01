請輸入信箱以查詢密碼
<input type="text" name="email" id="email">
<div id="res">
    <button type="button" onclick='find()'>尋找</button>
</div>

<script>
    function find(){
        $.get("./api/find.php",{email:$('#email').val()},(res)=>{
            $("#res").text(res);
        })
    }
</script>