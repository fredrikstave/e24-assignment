<?php

namespace AssignmentBundle\Model;

class Article
{
    protected $title;
    protected $description;
    protected $link;
    protected $image;
    protected $publishDate;
    protected $timestamp;

    public function __construct()
    {
    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function getLink()
    {
        return $this->link;
    }
    
    public function getImage()
    {
        return $this->image;
    }
    
    public function getPublishDate()
    {
        return $this->publishDate;
    }
    
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    public function setTitle($title)
    {
        $this->title = (string) $title;

        return $this;
    }
    
    public function setDescription($description)
    {
        $this->description = (string) $description;

        return $this;
    }
    
    public function setLink($link)
    {
        $this->link = (string) $link;

        return $this;
    }
    
    public function setImage($image)
    {
        $this->image = (string) $image;

        return $this;
    }
    
    public function setPublishDate($publishDate)
    {
        $this->publishDate = (string) $publishDate;

        return $this;
    }
    
    public function setTimestamp($timestamp)
    {
        $this->timestamp = (int) $timestamp;

        return $this;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
