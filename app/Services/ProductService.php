<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Exception;

class ProductService
{
    /**
     * @var $productRepository
     */
    protected $productRepository;

    /**
     *
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Get all product.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    /**
     * Get product by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->productRepository->getById($id);
    }

}