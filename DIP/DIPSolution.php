<?php

interface Category
{
}

class DramaCategory implements Category
{
}

class Movie
{
    private $name;
    private $category;

    public function __construct($name, Category $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }
}
