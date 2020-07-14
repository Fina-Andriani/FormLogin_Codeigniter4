<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_user extends Model{
    protected $table = 'user';
    protected $allowedFields =['email','password','firstname','lastname','update_at'];

    // public function getUser()
   // {
    //    $builder = $this->db->table('user');
   //     $builder->select('*');
   //     return $builder->get();
  //  }

 //   public function saveUser($data){
 //       $query = $this->db->table('user')->insert($data);
  //      return $query;
  //  }
 //  public function updateUser($data, $id)
  //  {
  //      $query = $this->db->table('user')->update($data, array('firstname' => $id));
  //      return $query;
  //  }
 
  //  public function deleteUser($id)
  //  {
  //      $query = $this->db->table('user')->delete(array('firstname' => $id));
  //      return $query;
  //  } 
}