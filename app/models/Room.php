<?php 
class Room{

    private $db;

    public function __construct(){
        $this->db = new Database; //Instantiate Database
    }

    public function createroom($data){
        $this->db->query('INSERT INTO rooms (roomname, adminid, roomlocation, roomdesc, roomprice, roomsavailable, roomimage) VALUES (:roomname, :adminid, :roomlocation, :roomdesc, :roomprice, :roomsavailable, :roomimage)');
        //Bind Values
        $this->db->bind(':adminid', $data['adminid']);
        $this->db->bind(':roomname', $data['roomname']);
        $this->db->bind(':roomdesc', $data['roomdesc']);
        $this->db->bind(':roomlocation', $data['roomlocation']);
        $this->db->bind(':roomprice', $data['roomprice']);
        $this->db->bind(':roomsavailable', $data['roomavail']);
        $this->db->bind(':roomimage', $data['roomNewFileName']);
        //when it word execute this function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function displayrooms(){
        $this->db->query('SELECT * FROM rooms');
        $records = $this->db->resultSet();
        if($records > 0){
            return $records;
        } else{
            return false;
        }
    }
    public function deleteroom($roomid){
        $this->db->query('DELETE FROM rooms WHERE roomid = :roomid');
        $this->db->bind(':roomid', $roomid);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function updateroom($data){
        $this->db->query('UPDATE rooms SET roomname=:roomname, roomdesc=:roomdesc, roomlocation=:roomlocation, roomprice=:roomprice, roomsavailable=:roomsavailable, roomimage=:roomimage WHERE roomid = :roomid');
        $this->db->bind(':roomid', $data['roomid']);
        $this->db->bind(':roomname', $data['roomname']);
        $this->db->bind(':roomdesc', $data['roomdesc']);
        $this->db->bind(':roomlocation', $data['roomlocation']);
        $this->db->bind(':roomprice', $data['roomprice']);
        $this->db->bind(':roomsavailable', $data['roomavail']);
        $this->db->bind(':roomimage', $data['UpdateroomNewFileName']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function findRoombyRoomName($roomname){ //For now wla pani ni gana
        //prepared statement
        $this->db->query('SELECT * FROM rooms WHERE roomname = :roomname');
        // email param will be binded w/ the email variable
        $this->db->bind(':roomname', $roomname);
        //check if room
        if($this->db->rowCount() > 0){
            return true;
        } else{
            return false;
        }
    }
}
?>