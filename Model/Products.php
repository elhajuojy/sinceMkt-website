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
    //product card design 1 
    public function productCard(): string
    {
        return '
        <div class="card card-body '.$this->id.'">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0">

                        <img src="' . $this->image . '" width="150" height="150" alt="">

                    </div>

                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold">
                            <a href="#" data-abc="true">' . $this->title . '</a>
                        </h6>

                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Phones</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">Mobiles</a></li>
                        </ul>

                        <p class="mb-3">' . $this->description . '</p>

                        <ul class="list-inline list-inline-dotted mb-0">
                            <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                            <li class="list-inline-item">Add to <a href="#" data-abc="true">best selling </a></li>
                        </ul>
                    </div>

                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$' . $this->price . '</h3>
                        <div>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>

                        <div class="text-muted">1985 reviews</div>
                       <div class="flex">
                       <a href="/admin/addproduct?id='.$this->id.'"><button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Update</button></a>
                        <button type="button" class="btn btn-danger mt-4 text-white" onclick="deleteUser('.$this->id.')"><i class="icon-cart-add mr-2"></i> Delete</button>
                       </div>
                    </div>
                </div>
            </div>


        ';
    }
    //product card design 2

    public function newProductCard():string{
        return '<div class="new-product-card">
        <div class="new-pr-crd-img">
            <img src="'.$this->image.'" alt="">
        </div>						
        <p>'.$this->title.'</p>
        <p>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
        </p>
        <div class="new-product-card-buy-price">
            <p>'.$this->price.'</p>
            <div>
                <img src="../assets/images/icons/icon-shop.svg" alt="">
            </div>
        </div>
        </div>';
    }
    public function bestSellingCard():string{
        return '
        <div class="best-selling-products-card">
            <div class="best-selling-products-card-img">
                <img src="'.$this->image.'" alt="">
            </div>
            <div class="best-selling-products-card-review">
                <div class="best-selling-products-card-review-stars">
                    <p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                    </p>

                </div>
                <div class="best-selling-products-card-review-count">
                    <p>(45 Review )</p>
                </div>

            </div>
            <p>'.$this->title.'</p>
            <p>$'.$this->price.'</p>
        </div>
        ';
    }
}
