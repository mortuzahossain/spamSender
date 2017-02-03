<?php
    require_once "function.php";
    $user = new StoreData();


        $ip         = $_POST['ip'];
        $hostname   = $ip;
        $subject    = $_POST['sub'];
        $toemail    = $_POST['email'];
        $fromemail  = $_POST['fromemail'];
        $message    = $_POST['message'];
        $loop       = $_POST['loop'];

        if (empty($subject)||empty($toemail)||empty($fromemail)||empty($message)||empty($loop)) {
            echo "<span style='color:#e53d37'>Error !!! Field Must Not Empty</span>";
        } else {
            $storedata = $user -> store($fromemail,$toemail,$subject,$message,$ip,$hostname);
            if ($storedata){
                for ($i=0;$i<$loop;$i++){
                    $j=$i+1;
                    if(mail($toemail, $subject, $message,$fromemail))
                        echo "Send:".$j." ---->mail to: ".$toemail." :::: Success.</br>";
                    else
                        echo "Send:".$j." ---->mail to: ".$toemail."<span style='color:#e53d37'> :::: Failed.</br></span>";
                }
            }
        }
    
?>
