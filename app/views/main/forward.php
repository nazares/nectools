<h1 class="title"><?php echo $title; ?></h1>
<form action="/forward" method="post">

    <div class="form__item">
        <input type="text" placeholder="phone,phone,etc." name="phones">
        <label for="loop">loop</label>
        <input type="checkbox" name="loop" id="loop">
    </div>
    <input type="submit" value="Send">
</form>
<div class="containerf">
    <table>
        <tr>
            <th>Code</th>
            <th>phone#1</th>
            <th>phone#2</th>
        </tr>

        <?php foreach ($data as $value) : ?>
            <tr>
                <td>E603</td>
                <td><?php echo $value[0]; ?></td>
                <td><?php echo $value[1]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>