<?php require '../../header.php'; ?>

<div class="ht0">商品番号</div>
<div class="th1">商品名</div>
<div class="th1">価格</div>
<form action="chapter_6_8_output.php">
    <input type="hidden" name="command" value="insert">
    <div class="td0"></div>
    <div class="td1"><input type="text" name="name"></div>
    <div class="td1"><input type="text" name="price"></div>
    <div class="td2"><input type="submit" value="追加"></div>
</form><br>

<?php require '../../footer.php'; ?>