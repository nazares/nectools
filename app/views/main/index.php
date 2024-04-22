<h1 class="title"><?php echo $title; ?></h1>
<div class="container">
    <form action="/" method="post">
        <textarea id="" cols="30" name="data" placeholder="type here the number,name"></textarea>
        <input type="submit" value="Convert">
    </form>

    <table>
        <?php if (!empty($_POST)) : ?>
            <tr>
                <th>Code</th>
                <th>Phone</th>
                <th>Converted</th>
                <th>Len</th>
                <th>Decode</th>
                <th>Len</th>
            </tr>

            <?php foreach ($data as $value) : ?>
                <tr>
                    <td>770</td>
                    <td><?php echo trim($value['phone'], ' '); ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo mb_strlen($value['name']); ?></td>
                    <td><?php echo $value['decode']; ?></td>
                    <td><?php echo mb_strlen($value['decode']); ?></td>
                </tr>
                <tr>
                    <td>775</td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo mb_strlen($value['name']); ?></td>
                    <td><?php echo $value['decode']; ?></td>
                    <td><?php echo mb_strlen($value['decode']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>