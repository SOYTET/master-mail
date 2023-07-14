<?php session_start();
if (!isset($_SESSION['username'])) {
    header('location: ./login/login.php?ref=' . $_SERVER["PHP_SELF"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$user = $_SESSION['username'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("./src/style.php"); ?>
    <?php require_once("./src/blockstyle.php"); ?>
    <?php require_once("./src/main.php"); ?>
    <?php include("./src/connection.php") ?>
    <script src="https://kit.fontawesome.com/c90b4e63b2.js" crossorigin="anonymous"></script>
    <title>Master
        <?php echo $user; ?>
    </title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo"><span>
                    <?php require("./components/manu.php"); ?>
                </span> <span class="span">Master
                    <?php echo $user; ?>'s Mail
                </span>
            </div>
        </div>
        <div id="menu">
            <?php
            $mail_connect = mysqli_query($connection_mail, "SELECT * FROM `rsa_key` WHERE `user2` = '$user' && `type` = 'connect' || `type` = 'reply' ;");
            while ($row_connect = mysqli_fetch_assoc($mail_connect)) {
                ?>
            <div class="<?php echo $row_connect['type']; ?>"><i class="fa-solid fa-envelope-circle-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $row_connect['key1']; ?> &nbsp;&nbsp;<i class="fa-solid fa-key"
                    onclick="connection()"></i>&nbsp;&nbsp;
                <?php echo $row_connect['key2']; ?> &nbsp;&nbsp; <i class="fa-solid fa-key"
                    ></i> &nbsp;&nbsp;
                <?php echo $row_connect['key3']; ?> &nbsp;&nbsp;<a href="./src/PSkhode.php?key1=<?php echo $row_connect['key1'];?>&key2=<?php echo $row_connect['key2'];?>&key3=<?php echo $row_connect['key3'];?>&user=<?php echo $row_connect['user1'];?>"><i class="fa-solid fa-check-double"></i></a>
            </div>
            <?php } ?>
            <a href="./src/logout.php" id="logout"><button>Master Out</button></a>
        </div>
        <div id="mail_blog">
            <?php
            $mail_result = mysqli_query($connection_mail, "SELECT * FROM `rsa_key` WHERE `user2` = '$user' AND `type` = 'msg';");
            while ($row = mysqli_fetch_assoc($mail_result)) {
                ?>
            <a href="./src/sar.php?userId=<?php echo $row['id'];?>">
                <div class="mail_message">
                    <input type="checkbox" id="userMail" class="checkbox5">
                    <i class="fa-regular fa-star"></i>&nbsp;&nbsp;&nbsp;
                    <p class="msgname" id="user_mail"><i class="fa-solid fa-user-secret"></i>
                        <?php echo $row['user1']; ?>
                    </p>
                    <p class="Huntkey"><i class="fa-brands fa-keycdn"></i>
                        <?php echo $row['message']; ?>
                    </p>
                    <p class="tag"><i class="fa-solid fa-hashtag"></i>
                        <?php echo $row['tag']; ?>
                    </p>
                    <p class="idUser" id="idUser">&nbsp;&nbsp;&nbsp;
                        <?php echo $row['id']; ?>
                    </p>
                    <i class="fa-solid fa-bell-slash"></i>
                    <p class="time"><i class="fa-regular fa-clock"></i>
                        <?php echo $row['time']; ?>
                    </p>
                </div>
            </a>
            <?php
            } ?>
        </div>
        <?php
        $type = $_COOKIE["type"];
        $tag = $_COOKIE["tag"];
        $key1 = $_COOKIE["key1"];
        $key2 = $_COOKIE["key2"];
        $specialKey = $_COOKIE["specialKey"];
        $user2 = $_COOKIE["user2"];
        if (isset($_POST["mail_send"])) {
            $msg32 = $_POST['mail_send'];
            $idMsg = $_POST['idMsg'];
            $chack = mysqli_query($connection_mail, "SELECT * FROM `rsa_key` WHERE `id` = '$idMsg';");
            $chackU = mysqli_fetch_assoc($chack);
            if ($chackU != true) {
                mysqli_query($connection_mail, "INSERT INTO `rsa_key` 
    (`id`, `user1`, `user2`, `key1`, `key2`, `key3`, `message`, `type`, `tag`, `time`) VALUES 
    ($idMsg, '$user', '$user2', '$key1', '$key2', '$specialKey', '$msg32', '$type', '$tag', CURRENT_TIME());");
            }
        }
        ?>
        <div id="MessageCompose">
            <button onclick="to()">To</button>
            <button onclick="step1()">Key1</button>
            <button onclick="step2()">Key2</button>
            <button onclick="privateKey()">Private key</button>
            <button onclick="step3()">Special key</button>
            <button onclick="tag()">tag</button>
            <button onclick="bamboo()">connect</button>
            <button onclick="masterCode()">Master Code</button>
            <form method="post">
                <textarea name="mail_send" id="mail_send" cols="70" rows="20">hello</textarea>
                <i class="fa-solid fa-circle-minus" onclick="mail_send()"></i>
                <button> id = </button>
                <input type="text" value="hi" id="idMsg3" name="idMsg">
                <button type="submit" onclick="refresh()">send</button>
            </form>
        </div>
        <div id="MessageCompose2">
            <button onclick="to()">To</button>
            <button onclick="privateKey3()">Private key</button>
            <button onclick="bamboo()">connect</button>
            <button onclick="masterCode3()">Master Code</button>
            <form method="post">
                <textarea name="mail_send" id="mail_send3" cols="70" rows="20">hello</textarea>
                <i class="fa-solid fa-circle-minus" onclick="mail_send3()"></i>
                <button> id = </button>
                <input type="text" value="hi" id="idMsg" name="idMsg">
                <button type="submit" onclick="refresh()">send</button>
            </form>
        </div>
    </div>
    <div class="tool">
        <div class="compose_btn1">
            <?php require("./components/button.php"); ?>
        </div>
        <div class="compose_btn2">
            <?php require("./components/button2.php"); ?>
        </div>
    </div>
</body>
<script>
    document.getElementById("idMsg").value = Math.floor((Date.now() + Math.random()) * 100000);
    document.getElementById("idMsg3").value = Math.floor((Date.now() + Math.random()) * 100000);
</script>

</html>