<?php if ($userName) : ?>
        <h3>Добро пожаловать <?=$userName ?></h3>
        <a href="/?logout">[EXIT]</a>
    <?php else  :?>
        <form method="post">
            <input type="text" name="username">
            <input type="submit">
        </form>
    <?php endif ?>  