<?php
class OrderModel extends Model
{
    protected $_table = 'tbl_orders';
    
    public function tableFill()
    {
        return 'tbl_orders';
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
