<?php require '../header.php'; ?>

<p>商品の色を選択してください。</p>
<form action="chapter_4_5_output.php" method="post">
    <select name="color">
        <?php
        $color = ['ホワイト', 'ブルー', 'レッド', 'イエロー', 'ブラック'];
        foreach ($color as $c) {
            echo '<option value="', $c, '">', $c, '</option>';
        }
        ?>
    </select>
    <p><input type="submit" value="確定"></p>
</form>

<?php require '../footer.php'; ?>