<?php

namespace Model;

use core\Model;
class Products extends Model
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;
    private string $image;
    // private int $category_id;

    public function __construct()
    {
        parent::__construct(get_class($this));
    }

    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }

    

}