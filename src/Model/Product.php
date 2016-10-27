<?php

namespace TPerformant\API\Model;

class Product extends GenericEntity {
    public $id;
    public $title;
    public $category;
    public $subcategory;
    public $brand;
    public $uniqueCode;
    public $price;
    public $caption;
    public $structuredImageUrls;
    public $url;
    public $description;
}
