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


    var text = "love";
    var key = "35";

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
        let lenght2 = encrypted.length/7;
        let i7 = 7;
        let i2 = 0;
        for (let i = 0; i < lenght2; i++) {
            let txt = encrypted.slice(i2,i7);
            let decryptedKhode = xorDecryption(txt, key);
            decrypted += binaryToText(decryptedKhode);
            i2 = i7;
            i7 += 7;
        }
        console.log(decrypted);
    }
</script>