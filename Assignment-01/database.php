<?php
 class Database {
    // A private keyword, it can be accessed within the class only
    private $connection;
    function __construct(){
        $this->connect_db();
    }
    public function connect_db(){
        $this->connection = mysqli_connect('172.31.22.43','Neelkumar200556051','RkE6lLlz4d','Neelkumar200556051');
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error());
        }
    }
        public function create($fname, $phone, $email,$delivery_method, $delivery_address, $delivery_instructions, $size, $base, $extra_cheese, $dip, $bread, $dessert, $payment_method, $card_number, $billing_address){
            $sql = "INSERT INTO Orders (fname, phone, email, delivery_method, delivery_address, delivery_instructions, size, base, extra_cheese, dip, bread, dessert, payment_method, card_number, billing_address) VALUES ('$fname', '$phone', '$email', '$delivery_method', '$delivery_address', '$delivery_instructions', '$size', '$base', '$extra_cheese', '$dip', '$bread', '$dessert', '$payment_method', '$card_number', '$billing_address')";
            $res = mysqli_query($this-> connection,$sql);
        if($res){
            return true;
        }
        else{
            return false;
        }
    } public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection,$var);
        return $return;
    }
}
$database = new Database();

?>