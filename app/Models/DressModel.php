<?php namespace App\Models;

use CodeIgniter\Model;

class DressModel extends Model
{
    protected $table = 'dresses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','collection','size','color','price','stock','image','images','description','created_at','updated_at'];
    protected $useTimestamps = true;
    protected $returnType = 'array';
}
