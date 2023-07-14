<?php
session_start();
include("./connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master mail</title>
    <style>
        #msgEncrypted {
            width: 60vw;
        }

        :root {
            --color-primary: hsl(310, 100%, 65%);
            --color-secondary: hsl(160, 100%, 65%);
            --background: hsl(230, 30%, 15%);
            --text: hsl(310, 100%, 95%);
        }

        ::selection {
            background-color: var(--color-primary);
            color: var(--background);
            -webkit-text-fill-color: var(--background);
        }

        * {
            box-sizing: border-box;
        }

        body {
            display: grid;
            place-content: center;
            gap: 4vh;
            min-height: 100vh;
            width: min(60ch, 100vw - 2rem);
            margin-right: auto;
            margin-left: auto;
            font-size: 1.5rem;
            line-height: 1.5;
            background-color: var(--background);
            color: var(--text);
            overflow-x: hidden;
        }

        h1 {
            color: var(--color-primary);
        }

        blockquote {
            border-left: 5px solid;
            margin-left: 0;
            padding: 1rem 0 1rem 2rem;
            font-size: 2rem;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(35deg,
                    var(--color-primary),
                    var(--color-secondary));

            p {
                margin: 0;
            }
        }

        .btn_back {
            height: 50px;
            width: 100px;
            position: absolute;
            font-size: 18px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .PrivateKey-btn {
            width: 90px;
            cursor: pointer;
        }
    </style>
<script>
     function getRandomPrime(min, max) {
        // Generate a random number in the specified range.
        var randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;

        // Check if the number is prime.
        var isPrime = true;
        for (var i = 2; i <= Math.sqrt(randomNumber); i++) {
            if (randomNumber % i === 0) {
                isPrime = false;
                break;
            }
        }

        // If the number is prime, return it.
        if (isPrime) {
            return randomNumber;
        } else {
            // Otherwise, generate another random number and try again.
            return getRandomPrime(min, max);
        }
    }
    document.cookie = 'privateKey55' + "=" + "0";
    privateKeyAuto = getRandomPrime(1, 55);
    function xorKeyPrivate(){
        var key5 = window.prompt("Enter your master code: ",privateKeyAuto);
        document.cookie = 'privateKey55' + "=" + key5;
        let key1 =  document.getElementById("idkey1").innerText;
        let key2 =  document.getElementById("idkey2").innerText;
        let specialKey = Math.pow(key1,key5) % key2;
        document.cookie = 'specialKey' + '=' + specialKey;
        setTimeout(() => {
            location.reload();
        }, 500);
    }
</script>
</head>
<?php
$user_send = $_GET["user"];
$type ="reply";
$user = $_SESSION['username'];
$tag = "default";
$key1 = $_GET['key1'];
$key2 = $_GET['key2'];
$key3 = $_GET['key3'];
$specialKey = $_COOKIE["specialKey"];
$user2 = $_GET['user'];
if (isset($_POST["idMsg"])) {
    $msg32 = $_POST['idMsg'];
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

<body>
    <a href="../index.php"><button class="btn_back">back</button></a>
    <h1><code>::<?php echo $user_send; ?></code></h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ea libero recusandae error esse at eaque, cumque
        maxime
        in officia architecto labore temporibus. Fugiat deserunt dignissimos ullam harum aut quod.</p>
    <button class="PrivateKey-btn" onclick="xorKeyPrivate()">Private Key</button>
    <form method="post">
        <input type="text" value="hi" id="idMsg" name="idMsg">
        <button class="PrivateKey-btn" type="submit">REPLY</button>
    </form>
    <blockquote>
        <p id="msgEncrypted">
            <?php
                $privateKey5 = $_COOKIE['privateKey55'];
                $sum =12%5;
                $translate = ($key3**$privateKey5)%$key2;
                echo $translate;
            ?>
        </p>
        <p id="decrypted"></p>
    </blockquote>
    <div id="idkey1"><?php echo $key1; ?></div>
    <div id="idkey2"><?php echo $key2; ?></div>
</body>
<script>
    document.getElementById("idMsg").value = Math.floor((Date.now() + Math.random()) * 100000);
</script>
</html>