<?php include 'included.php'; ?>
<!DOCTYPE html>
<html>
    <head>
            <title>PHP Rami's Web</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style><?php include 'css/main.css';?></style>
    </head>

    <!-- Boddy -->
    <div class="body">

        <?php readfile('elements/header.html') ?>

        <?php readfile("elements/navBar.html") ?>

        <!-- The content -->
        <div class="row">

                <!-- Main content -->
                <div class="main">
                        <p>Hellow world in PHP: <?php echo '<p>Hello World</p>'; ?></p>
                </div>
        </div>

        <?php readfile("elements/footer.html") ?>

    </div>
</html>