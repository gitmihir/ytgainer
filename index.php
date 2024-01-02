<?php
if (isset($_POST['submitallvalue'])) {
    function getYouTubeVideoId($url)
    {
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);
        if (isset($params['v'])) {
            return $params['v'];
        } else {
            return $url[4];
        }
    }
    $ipAddresses = explode(",", $_POST['list_of_ips']);
    $ytlink = $_POST["ytlink"];
    $videoId = getYouTubeVideoId($ytlink);
    foreach ($ipAddresses as $ip) {
        ini_set("display_errors", "On");
        ini_set("error_reporting", E_ALL);
        ini_set("max_execution_time", 0);

        $output = shell_exec("php ytScript.php?vid=$videoId $ip");
        echo $output;
    }
}
?>
<html>
<title>YT Gainer</title>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5">
                    <h3>Please enter details in below fields</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="list_of_ips" style="margin-bottom: 5px;">List of Ip Addresses
                                <span style="color: red;">*</span></label>
                            <textarea class="form-control" name="list_of_ips" id="list_of_ips" cols="30" rows="10"
                                required></textarea>
                            <p style="color: blue;font-size: 13px;font-weight: 700;">Note: Please add
                                without space. But with comma, E.g.- 1.255.255.254,2.255.255.254,3.255.255.254</p>
                        </div>
                        <div class="form-group mt-3">
                            <label for="ytlink" style="margin-bottom: 5px;">Youtube Link <span
                                    style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="ytlink" required />
                        </div>
                        <div class="form-group mt-3">
                            <label for="ytnumber" style="margin-bottom: 5px;">No. of times you want to run
                                script <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="ytnumber" required />
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" name="submitallvalue" />
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</body>

</html>