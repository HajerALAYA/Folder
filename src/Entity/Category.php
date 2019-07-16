<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
class Category
{  /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var Job[] */
    private $jobs;

     /**
     * Constructor
     */
  public function __construct()
    {
        $this->jobs = new ArrayCollection();
       
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getJobs(): array {
        return $this->jobs;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setJobs(array $jobs) {
        $this->jobs = $jobs;
    }


    
    }
