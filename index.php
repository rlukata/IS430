<?php 
    /* Because the authentication prompt needs to be invoked twice,
    embed it within a function.
    */
    function authenticate_user() {
        header('WWW-Authenticate: Basic realm="My personal website"');
        header("HTTP/1.0 401 Unauthorized");
        exit;
    }

    /* If $_SERVER['PHP_AUTH_USER'] is blank, the user has not yet been
    prompted for the authentication information.
    */
    if (! isset($_SERVER['PHP_AUTH_USER'])) {
        authenticate_user();
    } else {
        $db = new mysqli("localhost", "rlukata", "ramito1991", "SchoolDatabase");
        $stmt = $db->prepare("SELECT username, pswd FROM logins
        WHERE username=? AND pswd=MD5(?)");
        $stmt->bind_param('ss', $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0)
        authenticate_user();
    } 
?>

<?php include 'included.php'; ?>

<html>
    
    <!-- Head -->
    <head>
        <title>PHP Rami's Web</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style> <?php include 'css/main.css';?> </style>
    </head>

    <!-- Body -->
    <div class="body">                
        
        <?php readfile('elements/header.html') ?>

        <?php readfile("elements/navBar.html") ?>
        
        <!-- The content -->
        <div class="row">

            <!-- Side content -->
            <div class="side">
                <p>Hi, my name is Rami Lukata. Welcome to my website.</p>
            </div>
            
            <!-- Main content -->
            <div class="main">
                <p>This is a locally stored web-server, where I'll be creating my website for IS 430.</p>    
            </div>
        </div>
        <?php readfile("elements/footer.html") ?>
    </div>
</html>