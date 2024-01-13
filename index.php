<html>

<head>


</head>

<body>
    <label>Youtube Link</label>
    <input type="text" id="ytlink">
    <label>Youtube Window Count</label>
    <input type="text" id="ytnumber">
    <button class="clickbtn">Click</button>
</body>
<script>
    const button = document.querySelector("button");
    button.addEventListener("click", (event) => {
        var ytlink = document.getElementById('ytlink')?.value;
        var ytnumber = document.getElementById('ytnumber')?.value;
        const button = document.querySelector("button");

        for (let i = 0; i <= ytnumber; i++) {
            window.open(ytlink, '_blank', 'height=' + screen.height + ', width=' + screen.width);
        }

    });
</script>

</html>