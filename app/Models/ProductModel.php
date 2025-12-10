<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'name', 'slug', 'image', 'description', 'price', 'created_at', 'updated_at'
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    public function findAllProducts(): array
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }

    public function findProductById(int $id): ?array
    {
        return $this->where('id', $id)->first();
    }
}
