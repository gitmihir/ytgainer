<html>

<head></head>

<body>
    <?php
    if (isset($_GET['vid'])) {
        $vid = $_GET['vid'];
        ?>
        <audio controls autoplay>
            <source src="https://www.youtube.com/embed/<?php echo $vid; ?>?autoplay=1" type="audio/mp4">
            Your browser does not support the audio element.
        </audio>
        <?php
    } else {
        echo "Your browser does not support the audio element.";
    }
    ?>
</body>

</html>