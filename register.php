<?php session_start(); ?>
<html>
    <header>
        <title>Ultra Rare Productions</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <link rel="icon" type="image/jpg" href="backGrounds/favicon.jpg" sizes="16x16">
        <script src="jquery-3.7.1.min.js"></script>
    </header>
    <body>
        <nav class="header">
            <img src="backGrounds/favicon.jpg" class="headerIMG">            
            <label class="logo">Ultra Rare Productions</label>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a class="active" href="#">Login/Register</a></li>
                <li><a href="dropUsALine.html">Drop Us A Line</a></li>
                <li><a href="info.html">Dates/Info</a></li>
            </ul>
        </nav>
        <section class="lMain">
            <form action="registerAction.php" method="post">
                <hr class="hrPad">
                <p class="iBody">Register</p>
                <hr class="hrPad">

                <?php if (isset($_GET['error']) && !isset($_SESSION['username'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <hr class="hrPad">
                <input type="text" id="useremail" name="email" class="loginField" placeholder="email">
                <hr class="hrPad">
                <input type="text" id="username" name="username" class="loginField" placeholder="username">
                <hr class="hrPad">
                <input type="password" id="password" name="password" class="loginField" placeholder="password">
                <hr class="hrPad">
                <input type="password" id="reTypePassword" name="re_password" class="loginField" placeholder="retype password">
                <hr class="hrPad">

                <script>
                    $(document).ready(function () {
                        $('#reTypePassword').on('input', function () {
                            var password = $('#password').val();
                            var reTypePassword = $(this).val();

                            if (password === reTypePassword) {
                                $('#passwordMatch').text('');
                            } else {
                                $('#passwordMatch').text('Passwords do not match');
                            }
                        });
                    });
                </script>

                <button type="submit" class="send">Register</button> 
            </form>
            <hr class="hrPad">
            <a href="login.php">Already have an account? Sign in here.</a>
        </section>
        <nav class="footer">
            <label class="footerText">Ultra Rare Productions Built by Connor Adamy</label>
        </nav>
    </body>
</html>