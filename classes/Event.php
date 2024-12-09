<?php


namespace classes;

use PDOException;


class Event {

    private $id;
    private $eventtype;
    private $eventdate;
    private $starttime;
    private $endtime;
    private $maxparticipants;
    private $hall;
    private $decoration;
    private $photo;
    private $decorationcomment;
    private $studio;
    private $catering;
    private $sound;
    private $username;

    public function __construct($id, $eventtype, $eventdate, $starttime, $endtime, $maxparticipants, $hall, $decoration, $photo, $decorationcomment, $studio, $catering, $sound,$username) {
        $this->id = $id;
        $this->eventtype = $eventtype;
        $this->eventdate = $eventdate;
        $this->starttime = $starttime;
        $this->endtime = $endtime;
        $this->maxparticipants = $maxparticipants;
        $this->hall = $hall;
        $this->decoration = $decoration;
        $this->photo = $photo;
        $this->decorationcomment = $decorationcomment;
        $this->studio = $studio;
        $this->catering = $catering;
        $this->sound = $sound;
        $this->username=$username;
        
    }

    public function getId() {
        return $this->id;
    }

    public function getEventtype() {
        return $this->eventtype;
    }

    public function getEventdate() {
        return $this->eventdate;
    }

    public function getStarttime() {
        return $this->starttime;
    }

    public function getEndtime() {
        return $this->endtime;
    }

    public function getMaxparticipants() {
        return $this->maxparticipants;
    }

    public function getHall() {
        return $this->hall;
    }

    public function getDecoration() {
        return $this->decoration;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getDecorationcomment() {
        return $this->decorationcomment;
    }

    public function getStudio() {
        return $this->studio;
    }

    public function getCatering() {
        return $this->catering;
    }

    public function getSound() {
        return $this->sound;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username): void {
        $this->username = $username;
    }
    


    public function setId($id): void {
        $this->id = $id;
    }

    public function setEventtype($eventtype): void {
        $this->eventtype = $eventtype;
    }

    public function setEventdate($eventdate): void {
        $this->eventdate = $eventdate;
    }

    public function setStarttime($starttime): void {
        $this->starttime = $starttime;
    }

    public function setEndtime($endtime): void {
        $this->endtime = $endtime;
    }

    public function setMaxparticipants($maxparticipants): void {
        $this->maxparticipants = $maxparticipants;
    }

    public function setHall($hall): void {
        $this->hall = $hall;
    }

    public function setDecoration($decoration): void {
        $this->decoration = $decoration;
    }

    public function setPhoto($photo): void {
        $this->photo = $photo;
    }

    public function setDecorationcomment($decorationcomment): void {
        $this->decorationcomment = $decorationcomment;
    }

    public function setStudio($studio): void {
        $this->studio = $studio;
    }

    public function setCatering($catering): void {
        $this->catering = $catering;
    }

    public function setSound($sound): void {
        $this->sound = $sound;
    }


    public function storedata($con) {
        try {
            $query = "INSERT INTO Events(EventName,EventDate,StartTime,EndTime,maxparticipants,Hall,Decoration,SamplePhoto,Comment,Studio,SoundSystem,Catering,Username) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->eventtype);
            $pstmt->bindValue(2, $this->eventdate);
            $pstmt->bindValue(3, $this->starttime);
            $pstmt->bindValue(4, $this->endtime);
            $pstmt->bindValue(5, $this->maxparticipants);
            $pstmt->bindValue(6, $this->hall);
            $pstmt->bindValue(7, $this->decoration);
            $pstmt->bindValue(8, $this->photo);
            $pstmt->bindValue(9, $this->decorationcomment);
            $pstmt->bindValue(10, $this->studio);
            $pstmt->bindValue(11, $this->sound);
            $pstmt->bindValue(12, $this->catering);
            $pstmt->bindValue(13, $this->username);
            
            $pstmt->execute();
            return ($pstmt->rowCount() > 0);
        } catch (PDOException $exc) {
            die("Error in user class's register function: " . $exc->getMessage());
        }
    }

}
