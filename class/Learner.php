<?php
class Learner
{
    private int $_id;
    private string $_name;
    private string $_description;
    private int $_age;
    private int $_size;


    // Get
    public function getId()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getDescription()
    {
        return $this->_description;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getSize()
    {
        return $this->_size;
    }


    // Set
    public function setId(int $id)
    {
        return $this->_id = $id;
    }
    public function setName(string $name)
    {
        return $this->_name = $name;
    }
    public function setDescription(string $description)
    {
        return $this->_description = $description;
    }
    public function setAge(int $age)
    {
        return $this->_age = $age;
    }
    public function setSize(int $size)
    {
        return $this->_size = $size;
    }

    //Hydrate
    public function hydrate(array $tab)
    {
        if ((isset($tab['id'])) && !empty($tab['id'])) {
            $this->setId($tab['id']);
        }
        if ((isset($tab['id'])) && !empty($tab['name'])) {
            $this->setName($tab['name']);
        }
        if ((isset($tab['id'])) && !empty($tab['description'])) {
            $this->setDescription($tab['description']);
        }
        if ((isset($tab['id'])) && !empty($tab['age'])) {
            $this->setAge($tab['age']);
        }
        if ((isset($tab['id'])) && !empty($tab['size'])) {
            $this->setSize($tab['size']);
        }
    }
}
