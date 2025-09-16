<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface ProductRepositoryInterface
 * @package App\Repositories
 */
interface ProductRepositoryInterface
{
    /**
     * Get best selling product
     */
    public function getBestSellingProduct();

    /**
     * Get new products
     */
    public function getNewProducts(int $limit = 4);
    

    /**
     * Get total product sold by id
     * @param int $id
     */
    public function getTotalProductSoldById($id);
}
?>