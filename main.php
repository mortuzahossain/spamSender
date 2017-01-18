<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>
<div class="container">
    <h1 class="text-center status">Status Of Sending</h1>
    <div class="showStatus">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $subject = $_POST['sub'];
            $to = $_POST['email'];
            $message = $_POST['message'];
            $loop = $_POST['loop'];

            if (empty($subject)||empty($to)||empty($message)||empty($loop)) {
                echo "<span style='color:#e53d37'>Error !!! Field Must Not Empty</span>";
            } else {
                for ($i=0;$i<$loop;$i++){
                    $j=$i+1;
                    #here go to the show code
                    if(mail($to, $subject, $message))
                        echo "Send:".$j." ---->mail to: ".$to." :::: Success.</br>";
                    else
                        echo "Send:".$j." ---->mail to: ".$to."<span style='color:#e53d37'> :::: Failed.</br></span>";
                }
            }
        }
        ?>
    </div>

    <div class="text-center goBack fixed-bottom">
        <p class="btn btn-success"><a href="index.html">Go Back</a></p>
    </div>

</div>



</body>
</html>