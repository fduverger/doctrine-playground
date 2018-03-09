<?php

use Doctrine\Common\Collections\ArrayCollection;

class Bug 
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var datetime
     */
    protected $created;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var collection
     */
    protected $products;
    /**
     * @var User
     */
    protected $engineer;
    /**
     * @var User
     */
    protected $reporter;
    
    

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    
    public function assignToProduct(Product $product)
    {
        $this->products[] = $product;
    }
    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of created
     *
     * @return  datetime
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @param  datetime  $created
     *
     * @return  self
     */ 
    public function setCreated(datetime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of engineer
     *
     * @return  User
     */ 
    public function getEngineer()
    {
        return $this->engineer;
    }

    /**
     * Set the value of engineer
     *
     * @param  User  $engineer
     *
     * @return  self
     */ 
    public function setEngineer(User $engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;

        return $this;
    }

    /**
     * Get the value of reporter
     *
     * @return  User
     */ 
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set the value of reporter
     *
     * @param  User  $reporter
     *
     * @return  self
     */ 
    public function setReporter(User $reporter)
    {
        $reporter->addReportedBug($this);
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return  collection
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    public function close()
    {
        $this->status = 'CLOSE';
    }
}