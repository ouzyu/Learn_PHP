<?php require '../../header.php'; ?>

<p>アップロードするファイルを選択してください。</p>
<form action="chapter_5_8_output.php" method="post" enctype="multipart/form-data">
    <p><input type="file" name="file"></p>
    <p><input type="submit" value="アップロード"></p>
</form>

<?php require '../../footer.php'; ?>