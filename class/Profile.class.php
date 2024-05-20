<?php
class Profile {
    private int $_id;
    private int $_userID;
    private string $_firstName;
    private string $_lastName;
    private int $_profilePhotoID;

    public function __construct(int $id, int $userID, string $firstName, string $lastName, int $profilePhotoID)
    {
    $this->_id = $id;
    $this->_userID = $userID;
    $this->_firstName = $firstName;
    $this->_lastName = $lastName;
    $this->_profilePhotoID = $profilePhotoID;
    }

    static function Get($id) {
        //połączenie do bazy danych
        $db = new mysqli('localhost', 'root', '', 'portal');
        //kwerenda do bazy danych
        $sql = "SELECT * FROM profile WHERE ID=?";
        $q->$db->prepare($sql);
        $q->bind_param("i", $id);
        $q->execute();
        $result = $q->get_result();
        $row = $result->fetch_assoc();
        $p = new Profile($row['ID'], $row['firstName'],$row['lastName'],$row['profilePhotoID']);

    }
    static function GetAll() : array {
        $db = new mysqli('localhost', 'root', '', 'portal');
        $sql = "SELECT * FROM profile";
        $q->$db->prepare($sql);
        $q->execute();
        $result = $q->get_result();
        $profiles = array();
        while($row = $result->fetch_assoc()){
            $profiles[] = new Profile($row['ID'], $row['firstName'],$row['lastName'],$row['profilePhotoID']);
        }
        return $profiles;
    }
    static function GetUserProfile($userID) : Profile {
        $db = new mysqli('localhost', 'root', '', 'portal');
        $sql = "SELECT * FROM profile WHERE userID=?";
        $q->$db->prepare($sql);
        $q->bind_param("i", $userID);
        $q->execute();
        $result = $q->get_result();
        $row = $result->fetch_assoc();
        $p = new Profile($row['ID'], $row['firstName'],$row['lastName'],$row['profilePhotoID']);
    }
    function getFullName() : string {
        return $this->_firstName . ' ' . $this->_lastName;
    }
}