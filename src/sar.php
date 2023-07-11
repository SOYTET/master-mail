<?php
include("./connection.php");
require("./encryption.php");
require_once("./sarStyle.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Master mail</title>
</head>
<?php
$userID = $_GET["userId"];
$mail_result = mysqli_query($connection_mail, "SELECT * FROM `rsa_key` WHERE `id` = '$userID';");
?>

<body>
  <a href="../index.php"><button class="btn_back">back</button></a>
  <?php while ($row = mysqli_fetch_assoc($mail_result)) { ?>
    <h1><code>::<?php echo $row['user2']; ?></code></h1>
    <div class="docs">XOR decryption is the process of reversing the XOR encryption process. In XOR encryption, a plaintext message is
      combined with a secret key using the XOR logical operator. The result is a ciphertext message that can only be
      decrypted by using the same key.</div>
    <p id="msgEncrypted">
      <?php echo $row['message']; ?>
    </p>
    <blockquote>
      <p id="decrypted"></p>
    </blockquote>
  <?php } ?>
</body>
<script>
  key = window.prompt("Enter your master code: ");
  encrypted = document.getElementById("msgEncrypted").innerText;
  DecryptionXOR();
  document.getElementById("decrypted").innerHTML = decrypted;
</script>

</html>