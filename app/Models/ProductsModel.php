<?php
namespace App\Models;

class products
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    // get method
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getImage()
    {
        return $this->image;
    }

    //set method
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $price)
    {
        $this->sku = $sku;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}