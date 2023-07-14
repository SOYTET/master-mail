<script>
    function xorEncrypt(text, key) {
        var encryptedText = "";
        for (var i = 0; i < text.length; i++) {
            encryptedText += String.fromCharCode(text.charCodeAt(i) ^ key.charCodeAt(i % key.length));
        }
        return encryptedText;
    }
    function xorDecrypt(encryptedText, key) {
        var decryptedText = "";
        for (var i = 0; i < encryptedText.length; i++) {
            decryptedText += String.fromCharCode(encryptedText.charCodeAt(i) ^ key.charCodeAt(i % key.length));
        }
        return decryptedText;
    }
    var boo = 0;
    function menu() {
        if (boo % 2 == 0) {
            document.getElementById("menu").style.display = "block";
            boo++;
        }
        else if (boo % 2 != 0) {
            document.getElementById("menu").style.display = "none";
            boo++;
        }
        // console.log(boo);
        return 0;
    }
    var boo2 = 0;
    function mail_send() {
        if (boo2 % 2 == 0) {
            document.getElementById("MessageCompose").style.display = "block";
            boo2++;
        }
        else if (boo2 % 2 != 0) {
            document.getElementById("MessageCompose").style.display = "none";
            boo2++;
        }
        // console.log(boo2);
        return 0;
    }
    var boo3 = 0;
    function mail_send3() {
        if (boo3 % 2 == 0) {
            document.getElementById("MessageCompose2").style.display = "block";
            boo3++;
        }
        else if (boo3 % 2 != 0) {
            document.getElementById("MessageCompose2").style.display = "none";
            boo3++;
        }
        // console.log(boo3);
        return 0;
    }
    function colorChannelMixer(colorChannelA, colorChannelB, amountToMix) {
        var channelA = colorChannelA * amountToMix;
        var channelB = colorChannelB * (1 - amountToMix);
        return parseInt(channelA + channelB);
    }
    function colorMixer(rgbA, rgbB, amountToMix) {
        var r = colorChannelMixer(rgbA[0], rgbB[0], amountToMix);
        var g = colorChannelMixer(rgbA[1], rgbB[1], amountToMix);
        var b = colorChannelMixer(rgbA[2], rgbB[2], amountToMix);
        // var rgbCode = "rgb("+r+","+g+","+b+")";
        return "#" + (1 << 24 | r << 16 | g << 8 | b).toString(16).slice(1);
    }
    function rgbToHex(r, g, b) {
        return "#" + (1 << 24 | r << 16 | g << 8 | b).toString(16).slice(1);
    }
    function getRandomNumber(min, max) {
        // Generate a random number between min (inclusive) and max (inclusive)
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    // var rgb = colorMixer([127,0,127],[143,0,143],0.5)
    // console.log(rgbToHex(rgb))
    let user2 = "default";
    let key1 = getRandomNumber(1, 55);
    let key2 = getRandomPrime(1, 55);
    let privateKeyAuto = getRandomPrime(1, 55);
    setInterval(() => {
        key1 =getRandomNumber(1, 55);
        key2 = getRandomPrime(1, 55);
        privateKeyAuto = getRandomPrime(1, 55);
    }, 500);
    let publicKey = 0;
    let tag2 = "default";

    document.cookie = 'type' + "=" + "msg";
    document.cookie = 'user2' + "=" + "default";
    document.cookie = 'key1' + "=" + "???";
    document.cookie = 'key2' + "=" + "???";
    document.cookie = 'specialKey' + "=" + "???";
    document.cookie = 'value3' + "=" + "default";
    document.cookie = 'tag' + "=" + "default";
    function bamboo() {
        document.cookie = 'type' + "=" + "connect";
    }
    function to() {
        user2 = window.prompt("Type prime number: ");
        document.cookie = 'user2' + "=" + user2;
        console.log(user2);
    }
    function step1() {
        key1 = window.prompt("Type prime number: ");
        document.cookie = 'key1' + "=" + key1;
        console.log(value1);
    }
    function step2() {
        key2 = window.prompt("Type prime number: ");
        document.cookie = 'key2' + "=" + key2;
        console.log(value2);
    }
    function privateKey() {
        privateKey = window.prompt("Type prime number: ");
        document.cookie = 'privateKey' + "=" + privateKey;
        specialKey = Math.pow(key1, privateKey) % key2;
        document.cookie = 'specialKey' + '=' + specialKey;
    }
    function privateKey3() {
        privateKey = window.prompt("Type prime number: ", privateKeyAuto);
        document.cookie = 'privateKey' + "=" + privateKey;
        specialKey = Math.pow(key1, privateKey) % key2;
        let text = 'Private Key:';
        let text2 = " && Publick Key: ";
        document.cookie = 'key1' + "=" + key1;
        document.cookie = 'key2' + "=" + key2;
        document.cookie = 'specialKey' + "=" + Math.pow(key1, privateKey) % key2;
    }
    function step3() {
        key3 = window.prompt("Type your Privat Key: ");
        document.cookie = 'key3' + "=" + key3;
        console.log(value3);
    }
    function tag() {
        tag2 = window.prompt("Type your Privat Key: ");
        document.cookie = 'tag' + "=" + tag2;
    }
    function connection() {
        publicKey = window.prompt("Enter Public Key Integer : ");
    }

    function Passcode_decryption() {
        let user_mail = document.getElementsByClassName("idUser")[0].innerHTML;
        let PasscodeX = window.prompt("Enter your master code: ");
        document.cookie = 'passcode' + "=" + PasscodeX;
        document.cookie = 'userID' + "=" + user_mail;
        location.href = "./src/sar.php";
    }
    let PcX2 = 0;
    var text = "love you so much&&&& and I *** you ";
    var key = "35";
    function masterCode() {
        key = window.prompt("Enter your master code: ");
        // let msg = document.getElementById("mail_send").value;
        // let msgxor = xorEncrypt(msg, PcX2);
        // let msgxor = xorEncrypt(msg, PcX2);
        encrytionXOR();
        document.getElementById("mail_send").value = encrypted;
    }
    function masterCode3() {
        key = window.prompt("Enter your master code: ");
        text = document.getElementById("mail_send3").value;
        encrytionXOR();
        document.getElementById("mail_send3").value = encrypted;
    }
    function refresh() {
        location.reload();
    }
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

</script>



<script>
    function textToBinary(text) {
        var binary = [];
        for (var i = 0; i < text.length; i++) {
            var charCode = text.charCodeAt(i);
            var binaryChar = charCode.toString(2);
            binary.push(Array(8 - binaryChar.length).join("0") + binaryChar);
        }
        return binary.join(" ");
    }
    function binaryToText(binaryCode) {
        var text = "";
        for (var i = 0; i < binaryCode.length; i += 8) {
            var byte = binaryCode.substring(i, i + 8);
            var charCode = parseInt(byte, 2);
            text += String.fromCharCode(charCode);
        }
        return text;
    }

    function xorEncryption(binaryCode, binaryKey) {
        var encryptedBinary = [];
        for (var i = 0; i < binaryCode.length; i++) {
            var encryptedBit = binaryCode[i] ^ binaryKey[i];
            encryptedBinary.push(encryptedBit);
        }
        return encryptedBinary.join("");
    }
    function xorDecryption(encryptedBinary, binaryKey) {
        var decryptedBinary = [];
        for (var i = 0; i < encryptedBinary.length; i++) {
            var decryptedBit = encryptedBinary[i] ^ binaryKey[i];
            decryptedBinary.push(decryptedBit);
        }
        return decryptedBinary.join("");
    }


    var encrypted = "";
    function encrytionXOR() {
        for (let i = 0; i < text.length; i++) {
            let txt = text[i];
            let binaryKhode = textToBinary(txt);
            encrypted += xorEncryption(binaryKhode, key);
        }
        console.log(encrypted);
    }

    var decrypted = "";
    function DecryptionXOR() {
        let lenght2 = encrypted.length / 7;
        let i7 = 7;
        let i2 = 0;
        for (let i = 0; i < lenght2; i++) {
            let txt = encrypted.slice(i2, i7);
            let decryptedKhode = xorDecryption(txt, key);
            decrypted += binaryToText(decryptedKhode);
            i2 = i7;
            i7 += 7;
        }
        console.log(decrypted);
    }
</script>