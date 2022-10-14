<?php
class Manager{

    private $_db;
    protected $table ='champion';

    public function __construct()
    {
        $this->_db = Database::db();
    }

    public function findAll(){
        $sql= "SELECT * FROM $this->table";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function findOne(string $name){
    $sql= "SELECT * FROM champion WHERE $this->table = :param1";
    $query = $this->_db->prepare($sql);
    $query->bindParam(':param1',$id,PDO::PARAM_INT);
    $query->bindParam(':param2',$name,PDO::PARAM_STR);
    $query->bindParam(':param3',$description,PDO::PARAM_STR);
    $query->bindParam(':param4',$age,PDO::PARAM_INT);
    $query->bindParam(':param5',$size,PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
    }

    public function deleteRandom(){
        $sql ='DELETE FROM champion WHERE `id` = :param1';
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1',$id,PDO::PARAM_INT,);
        $query->execute();
    }

    public function updateHulk(Learner $learner){
        $id = $learner->getId();
        $name = $learner->getName();
        $description = $learner->getDescription();
        $age = $learner->getAge();
        $size = $learner->getSize();

        $sql = "UPDATE champion SET `name` = 'HULK' WHERE id = 5";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }
}
?>