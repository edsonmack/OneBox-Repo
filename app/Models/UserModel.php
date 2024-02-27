<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users';
    // .. other member variables
    private $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    // Insert 
    public function insert_data($data = array())
    {
        return $this->db->table($this->table)->insert($data, false);
        // return $this->db->insertID();
    }

    // Update
    public function update_data($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));
        return $this->db->affectedRows();
    }

    // Delete
    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }

    // Retrieve all data's
    public function get_all_data()
    {
        $query = $this->db->query('select * from ' . $this->table);
        return $query->getResult();
    }

}