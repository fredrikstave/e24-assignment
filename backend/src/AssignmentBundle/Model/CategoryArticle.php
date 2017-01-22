<?php

namespace AssignmentBundle\Model;

class CategoryArticle extends Article
{
    protected $category;

    public function __construct()
    {
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = (string) $category;

        return $this;
    }
}
