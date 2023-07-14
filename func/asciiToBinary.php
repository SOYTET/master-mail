<script>
    let binary = "";
    let decimal = 51343;
    function asciiToBinary() {
        while (decimal > 0) {
            binary += (decimal % 2).toString();
            decimal = Math.floor(decimal / 2);
        }
        binary = binary.split("").reverse().join("")
        console.log(binary);
    }
</script>