<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'description', 'price', 'created_at', 'updated_at'];
}