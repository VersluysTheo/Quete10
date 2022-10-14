<?php 
class Learner{
    private int $_id;
    private string $_name;
    private string $_description;
    private int $_age;
    private int $_size;


    // Get
    public function getId(){
        return $this->_id;
    }
    public function getName(){
        return $this->_name;
    }
    public function getDescription(){
        return $this->_description;
    }
    public function getAge(){
        return $this->_age;
    }
    public function getSize(){
        return $this->_size;
    }


    // Set
    public function setId(int $id){
        return $this->_id = $id;
    }
    public function setName(string $name){
        return $this->_name = $name;
    }
    public function setDescription(string $description){
        return $this->_description = $description;
    }
    public function setAge(int $age){
        return $this->_age = $age;
    }
    public function setSize(int $size){
        return $this->_size = $size;
    }

    //Hydrate
    public function hydrate(array $tab){
        $this->setId($tab['id']);
        $this->setName($tab['name']);
        $this->setDescription($tab['description']);
        $this->setAge($tab['age']);
        $this->setSize($tab['size']);
    }
    
}
?>