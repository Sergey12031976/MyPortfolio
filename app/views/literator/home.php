<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Литератор';
    require 'modules\head.php';
    ?>
</head>
<body>
<?php require 'modules\header.php'; ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <?php
            require_once 'mysql_connect.php';
            $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
            $query = $pdo->query($sql);
            while ($row = $query->fetch(PDO::FETCH_OBJ)){

                echo "<h2>$row->title</h2>
                    <p><b>Автор: </b> <mark>$row->author</mark></p>
                    <p>$row->intro</p>
                    <a href='/news.php?id=$row->id' title='$row->title'>
                      <button class='btn btn-warning mb-5' style='width: auto'>Прочитать больше</button>
                    </a>";
            }

            ?>
        </div>

        <?php require 'modules\sidebar.php'; ?>

    </div>

</main>
<?php require 'modules\footer.php'; ?>
</body>
</html>
