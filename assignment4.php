<?php   include 'included.php'; ?>
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

            <!-- Side content -->
            <div class="side">
                <p>This assignment demonstrates the usage of the library PEAR and it's validate method.
                    To achieve this, the tool NetBeans IDE and the framework Composer were installed.</p>
                <p> The library to validate phone numbers is built by Giggsey and it's a port of Google's's
                API. It has also been installed using Composer. When the API fails, it attempts to use Regex.</p>
            </div>

            <!-- Main content -->
            <div class="main">
                <h1>Validating...</h1>
                <h2>emails</h2>
                <p>
                        <?php
                            $validateThis = new validateStrings();

                            echo 'Validate my email rlukata@cityuniversity.edu --> ';
                            $email = '"Lukata, Rami" <rlukata@cityuniversity.edu>';
                            $validateThis->validateEmail($email);

                            echo '<br><br>';
                            echo 'Validate my bad email rlukata%cityuniversity..edu --> ';
                            $email = '"Lukata, Rami" <rlukata%cityuniversity..edu>';
                            $validateThis->validateEmail($email);

                            echo '</p><h2>Phone Numbers</h2><p>';

                            echo 'Validate this phone: (206) 555-1212 --> ';
                            $phone = '(206) 555-1212';
                            $validateThis->validatePhoneUS($phone);
                            echo '<br>';

                            echo 'Validate this phone: +1 (206) 555-12121 --> ';
                            $phone = '+1 (206) 555-12121';
                            $validateThis->validatePhoneUS($phone);
                            echo '<br>';

                            echo 'Validate this phone: 206-JK5-1212 --> ';
                            $phone = '206-JK5-1212';
                            $validateThis->validatePhoneUS($phone);
                            echo '<br>';

                            echo 'Validate this phone: +1 206 555 1212 --> ';
                            $phone = '+1 206 555 1212';
                            $validateThis->validatePhoneUS($phone);
                            echo '<br>';

                            echo 'Validate this phone: +987 000 1234 1212 --> ';
                            $phone = '+987 000 1234 1212';
                            $validateThis->validatePhoneUS($phone);
                            echo '<br>';  
                        ?>
                </p>
            </div>
        </div>

        <?php readfile("elements/footer.html") ?>

    </div>
</html>