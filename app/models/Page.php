<?php 
class Page{

    private $db;

    public function __construct(){
        $this->db = new Database; //Instantiate Database
    }

    public function updateinfo($data){

        $this->db->query('UPDATE users SET firstname=:firstname, lastname=:lastname, email=:email WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updatepic($data){

        $this->db->query('UPDATE users SET firstname=:firstname, lastname=:lastname, email=:email WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}
?>