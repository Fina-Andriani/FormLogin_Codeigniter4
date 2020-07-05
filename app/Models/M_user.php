<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_user extends Model{
    protected $table = 'user';
    protected $allowedFields =['email','password','firstname','lastname','update_at'];
}