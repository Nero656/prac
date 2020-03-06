<h1>Портфолио</h1>
<p>
<table class="table table-bordered">
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <br>
    <br>
    <?php

    while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $row['year'] ?></td>
            <td><?= $row['site'] ?></td>
            <td><?= $row['description'] ?></td>
        </tr>
        <?php
    }

    ?>
</table>
</p>
