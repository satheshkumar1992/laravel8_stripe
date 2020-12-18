<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{

    /**
     * Get all Products.
     *
     * @return Product $Product
     */
    public function getAll()
    {
        return Product::all();
    }

    /**
     * Get Product by id
     *
     * @param $id
     * @return Product
     */
    public function getById($id)
    {
        return Product::find($id);
    }

    /**
     * Save Product
     *
     * @param $data
     * @return Product
     */
    public function save(Product $product)
    {
        return $product->save();
    }

    /**
     * Update Product
     *
     * @param $data
     * @return Product
     */
    public function update(Product $product)
    {
        return $product->update();
    }

}