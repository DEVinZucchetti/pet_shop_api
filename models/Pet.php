<?php
class Pet
{
    private $id;
    private $name;
    private $race_id;
    private $age;
    private $weight;
    private $size;
    private $created_at;

    private $connection;

    public function __construct($name, $race_id)
    {
        $this->name = $name;
        $this->race_id = $race_id;
        $this->connection = new PDO("pgsql:host=localhost;dbname=api_pets", "docker", "docker");
    }

    public function insert()
    {
        $sql = "insert into pets 
            (
                name,
                race_id
            )
            values
            (
                :name_value, 
                :race_id_value
                )
            ";

        $statement = ($this->getConnection())->prepare($sql);

        $statement->bindValue(":name_value", $this->getName());
        $statement->bindValue(":race_id_value", $this->getRaceId());

        $statement->execute();

    }

    function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function setRaceId($race_id)
    {
        $this->race_id = $race_id;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }


    public function getWeight()
    {
        return $this->weight;
    }


    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


    public function getSize()
    {
        return $this->size;
    }


    public function setSize($size)
    {
        $this->size = $size;
    }


    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function getRaceId()
    {
        return $this->race_id;
    }
}
