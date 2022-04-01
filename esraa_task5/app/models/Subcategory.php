<?php

namespace app\models;

use app\database\connection;
use app\database\contracts\crud;

class Subcategory extends connection implements crud
{
    private $id, $name_en, $name_ar, $status, $image,$categorie_id , $created_at, $updated_at;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_en
     */
    public function getNameEn()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     */
    public function setNameEn($name_en): self
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of name_ar
     */ 
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */ 
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
      /**
     * Get the value of categorie_id
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     */
    public function setCategorieId($categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }
    /**
     * Set the value of created_at
     */
    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     */
    public function setUpdatedAt($updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    function create(){}
    function read(){}
    function update(){}
    function delete(){}
   
    public function getSubcategoriesByCategory_id()
    {
        $query = "SELECT `id`,`name_en` FROM `subcategories` WHERE `status` = {$this->status} 
        AND `categorie_id` = {$this->categorie_id}";
        return $this->runDQL($query);
    }
    public static function find(int $id)
    {
        $query = "SELECT * FROM `subcategories` WHERE `id` = {$id}";
        return (New connection)->runDQL($query)->num_rows >= 1 ? true : false;
    }
  
}