<script>
        let binary = "110101";
        let decimal = 0;
        function binaryToAscii(){
            let length =binary.length-1;
            for (let index = 0; index < binary.length; index++) {
                decimal += binary[index] * Math.pow(2,length);
                console.log(index);
                length--;
            }
            console.log(decimal);
        }
</script>