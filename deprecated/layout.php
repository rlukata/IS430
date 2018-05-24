<?php
	
    function headWeb() 
    {
        echo
            '
            <!-- Header -->
            <div class="header">
                    <h1>IS 430</h1>
            </div>
            ';
    }
		

    function navBar()
    {
        echo 
            '<!-- Nav bar -->
            <div class="navbar" id="loginDB">
                <button onclick="document.getElementById(\'id01\').style.display=\'block\'" >Sign Up</button>
                <div id="id01" class="modal">
                    <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="closeSignin" title="Close Modal">&times;</span>
                    <form class="modal-content" action="elements/signup.php" method="post">
                        <div class="container">
                            <h1>Sign Up</h1>
                            <p>Please fill in this form to create an account.</p>
                            <hr>
                            <label for="username"><b>Username</b></label>
                            <input class="login" type="text" placeholder="Enter Username" name="username" required>

                            <label for="pswd"><b>Password</b></label>
                            <input class="login" type="password" placeholder="Enter Password" name="pswd" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input class="signin" type="password" placeholder="Repeat Password" name="psw-repeat" required>

                            <label>
                                <input class="signin" type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
                            </label>

                            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtnSigin">Cancel</button>
                                <button type="submit" class="signupbtn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <script>
                // Get the modal
                var modal = document.getElementById(\'id01\');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>

                <button onclick="document.getElementById(\'id02\').style.display=\'block\'" >Login</button>
                <div id="id02" class="modal">
                    <form class="modal-content animate" action="elements/login.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="closeLogin" title="Close Modal">&times;</span>
                            <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label for="username"><b>Username</b></label>
                            <input class="login" type="text" placeholder="Enter Username" name="username" required>

                            <label for="pswd"><b>Password</b></label>
                            <input class="login" type="password" placeholder="Enter Password" name="pswd" required>

                            <button type="submit">Login</button>
                            <label><input class="login" type="checkbox" checked="checked" name="remember">Remember me</label>
                        </div>
                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById(\'id02\').style.display=\'none\'" class="cancelbtnLogin">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>

                <script>
                // Get the modal
                var modal = document.getElementById(\'id02\');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>
                <a href="index.php">Home</a>
                <a href="assignment1.php">Assignment 1</a>
                <a href="assignment2.php">Assignment 2</a>
                <a href="assignment3.php">Assignment 3</a>                                
                <a href="assignment4.php">Assignment 4</a>
                <a href="assignment5.php">Assignment 5</a>
                <a href="assignment6.php">Assignment 6</a>
                <a href="assignment7.php">Assignment 7</a>
            </div>';
    }
	
    function footer()
    {
            echo '
                    <!-- Footer -->
                    <div class="footer">
                            <h2>
                                    <a href="mailto:rlukata@cityuniversity.edu">Contact me</a>
                            </h2>
                    </div>
                    ';
    }
?>