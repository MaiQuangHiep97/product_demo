<?php
class ProductModel extends Model
{
    protected $_table = 'tbl_products';
    // public function getUser()
    // {
    //     $data = $this->db->table('tbl_users')->where('email', '=', $_POST['email'])->where('type', '=', 'admin')->first();
    //     return $data;
    // }
    // public function getAll()
    // {
    //     $data = $this->db->table('tbl_users')->get();
    //     return $data;
    // }
    // public function updateUser($data)
    // {
    //     if (!empty($data)) {
    //         $data = $this->db->table('tbl_users')->where('email', '=', $_SESSION['user_login']['email'])
    //         ->where('type', '=', 'admin')->update($data);
    //     }
    // }
    public function insertProduct($data)
    {
        if (!empty($data)) {
            $data = $this->db->table('tbl_products')->insert($data);
        }
    }
    // public function deleteUser($id)
    // {
    //     if (!empty($id)) {
    //         $this->db->table('tbl_users')->where('id', '=', $id)->delete();
    //     }
    // }
    public function tableFill()
    {
        return 'tbl_products';
    }
    public function fieldFill()
    {
        return '*';
    }
    public function primaryKey()
    {
        return 'id';
    }
}
