<table class="mx-auto">
    <thead>
        <td>圖片</td>
        <td>替代文字</td>
        <td>顯示</td>
        <td>刪除</td>
    </thead>
    <?php
    $rows = $Img->all();
    foreach ($rows as $row) {
    ?><tr>
            <td><img src="img/<?= $row['img']; ?>" style="width: 150px;"></td>
            <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
            <td><input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
            </td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            
        </tr>
    <?php
    }
    ?>
</table>