<html>
    <header>
        <title>Ultra Rare Productions</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <link rel="icon" type="image/jpg" href="backGrounds/favicon.jpg" sizes="16x16">
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
            <form action="loginAction.php" method="post">
                <hr class="hrPad">
                <p class="iBody">Login</p>
                <hr class="hrPad">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <hr class="hrPad">
                <input type="text" id="username" name="username" class="loginField" placeholder="username">
                <hr class="hrPad">
                <input type="text" id="password" name="password" class="loginField" placeholder="password">
                <hr class="hrPad">
                <button type="submit" class="send">Login</button> 
                <hr class="hrPad">
            </form>
                <hr class="hrPad">
                <p class="iBody">Register</p>
                <hr class="hrPad">
                <input type="text" id="useremail" name="useremail" class="loginField" placeholder="email">
                <hr class="hrPad">
                <input type="text" id="username" name="reg_username" class="loginField" placeholder="username">
                <hr class="hrPad">
                <input type="text" id="password" name="reg_password" class="loginField" placeholder="password">
                <hr class="hrPad">
                <button type="button" class="send">Register</button> 
        </section>
        <nav class="footer">
            <label class="footerText">Ultra Rare Productions Built by Connor Adamy</label>
        </nav>
    </body>
</html>