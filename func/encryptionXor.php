<script>
    var text = "love";
    var key = "35";
    var ascii = '';
    function asciiKhode(){
        for (let index = 0; index < text.length; index++) {
            ascii += text.charCodeAt(index);
        }
        console.log(ascii);
    }

    let binary = "";
    function asciiToBinary() {
        while (ascii > 0) {
            binary += (ascii % 2).toString();
            ascii = Math.floor(ascii / 2);
        }
        binary = binary.split("").reverse().join("")
        console.log(binary);
    }

    let KeyBinary = 0;
    function keyTobinary(){
        while (key > 0) {
            KeyBinary += (key % 2).toString();
            key = Math.floor(key / 2);
        }
        KeyBinary = KeyBinary.split("").reverse().join("")
        console.log(KeyBinary);
    }

    function duplicationKeyBinaryKhode(){
        let dup = Math.floor(binary.length/KeyBinary.length)-1;
        let temp =KeyBinary;
        let remainder = Math.floor((binary.length%temp.length))
        for (let index = 0; index < dup; index++) {
            KeyBinary += temp;
        }
        // បូកសំណល់ដែលនៅសល់
        for (let index = 0; index < remainder; index++) {
            KeyBinary += 0;
        }
        console.log(KeyBinary);
    }
    var encrypted = "";
    function Encryption(){
        asciiKhode();
        asciiToBinary();
        keyTobinary();
        duplicationKeyBinaryKhode()
        for (let index = 0; index < binary.length; index++) {
            encrypted += binary[index] ^ KeyBinary[index];
        }
        console.log(encrypted);
    }
    var decrypted = "";
    function xorDecryption(){
        for (let index = 0; index < binary.length; index++) {
            decrypted += encrypted[index] ^ KeyBinary[index];
        }
        console.log(decrypted);
    }
</script>