<?php

require_once '../classes/Event.php';
require_once '../classes/Dbconnector.php';

use classes\Event;
use classes\Dbconnector;

if (isset($_POST["event_type"], $_POST["event_date"], $_POST["start_time"], $_POST["end_time"], $_POST["max_participants"], $_POST["hall"],$_POST["decoration"],$_POST["photo"],$_POST["decoration_comment"],$_POST["studio"],$_POST["catering"],$_POST["sound"],$_POST["username"])) {
if (empty($_POST["event_type"]) || empty($_POST["event_date"]) || empty($_POST["start_time"]) || empty($_POST["end_time"]) ||  empty($_POST["max_participants"]) ||  empty($_POST["hall"]) || empty($_POST["decoration"]) || empty($_POST["photo"]) || empty($_POST["decoration_comment"]) || empty($_POST["studio"]) || empty($_POST["catering"]) || empty($_POST["sound"])|| empty($_POST["username"])) {
        $location = "Select_event.php?status=1";
    }
    else {
        $eventtype = $_POST["event_type"];
        $eventdate = $_POST["event_date"];
        $starttime = $_POST["start_time"];
        $endtime = $_POST["end_time"];
        $maxparticipants = $_POST["max_participants"];
        $hall = $_POST["hall"];
        $decoration = $_POST["decoration"];
        $photo = $_POST["photo"];
        $decorationcomment = $_POST["decoration_comment"];
        $studio = $_POST["studio"];
        $catering = $_POST["catering"];
        $sound = $_POST["sound"];
        $username = $_POST["username"];
        $event = new Event($id, $eventtype, $eventdate, $starttime, $endtime, $maxparticipants, $hall, $decoration, $photo, $decorationcomment, $studio, $catering, $sound,$username);
        if($event->storedata(Dbconnector::getConnection())){
            $location = "Select_event.php?status=2";
        } else {
            $location = "Select_event.php?status=3";
            
        }
    }
} else {
    $location = "Select_event.php?status=0";
}
header("Location:" . $location);
