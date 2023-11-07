<!DOCTYPE html>

<?php 
session_start();
$sname = "dfkpczjgmpvkugnb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$uname = "tlebx5gnlgzv2jae";
$password = "yzb3u2dvou6cmwwu";
$dbName = "i9t5zecos08o6qyz";
$conn = mysqli_connect($sname, $uname, $password, $dbName);

if (!isset($_SESSION['username'])) {
    header("Location: login.php?error=Must be logged in to use forum");
    exit();
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $date = date('F d y, h:i:s A');
    $reply_id = $_POST["reply_id"];

    $query = "INSERT INTO posts VALUES('', '$name', '$comment', '$date', '$reply_id')";
    mysqli_query($conn, $query);
}
?>

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
                <li><a href="login.php">Login/Register</a></li>
                <li><a class="active" href="#">Forum</a></li>
                <li><a href="info.html">Dates/Info</a></li>
            </ul>
        </nav>
    </nav>
    <section class="fMain">
        <label class="ebh">General Forum</label>
        <hr class="hr">
        <p class="emailSubHead">For all sorts of discussion</p>
        <div class="container">

            <?php 
                $datas = mysqli_query($conn, "SELECT * FROM posts WHERE reply_id = 0");
                foreach($datas as $data) {
                    require 'comment.php';
                }
            ?>

            <form action="" method="post" class="forumForm">
                <h3 id="title">Make a post</h3>
                <input type="hidden" name="reply_id" id="reply_id" class="forumInput">
                <input type="text" name="name" placeholder="Desired display name" class="forumInput">
                <textarea name="comment" placeholder="Type your message here" class="forumInput"></textarea>
                <button type="submit" name="submit" class="forumSubmit">Submit</button>
            </form>
        </div>
        <script>
            function reply(id, name) {
                title = document.getElementById('title');
                title.innerHTML = "Reply to " + name;
                document.getElementById('reply_id').value = id;
            }
        </script>
    </section>
    <nav class="footer">
        <label class="footerText">Ultra Rare Productions Built by Connor Adamy</label>
    </nav>
    </body>
</html>