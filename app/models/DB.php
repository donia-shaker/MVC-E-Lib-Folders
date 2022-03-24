<?php

class DB{

     private $pdo;

     private $column = "*";
     private $table;
     private $where;
     private $operator;
     private $order_by;

     private $final_query;

    function __construct($dsn,$username,$password)
    {
        $this->pdo=new PDO($dsn,$username,$password);
        
    }

    public function get(){
        $query = "select " .$this->column.
                 " from ".
                 $this->table . 
                 $this->where . 
                 $this->operator . 
                 $this->order_by  ;
        
        echo $query;
        // echo $this->column;

       $stm = $this->pdo->prepare($query);
        if ($stm->execute())
        {
            $this->result = $stm->fetchAll();
        }
        else
        {

            $this->result = "error";
        }
        return $this;
        }

     public function column(...$arg){
        $this->column = implode(',' ,$arg);
        // echo ($this->column);
        // print_r($arg);
        return $this;
    }

        

    public function table( $table){
        $this->table = $table;
        return $this;
    } 

    public function where($column_name  ,$op, $value){
        $this->where = " WHERE ". $column_name ." ".$op." "."'$value'";
        return $this;
    }

    public function operator($oprator,$column_name,$op,$value){
        $this->operator= " ".$oprator." ".$column_name." ".$op." "."'$value'";
        return $this;

    }

    public function orderBy($order,...$arg){
        $this->order_by= " ORDER BY " .implode(',' ,$arg). " ". $order;
        return $this;
    }
    // public finalQuery(){

    // }
}



$database="categories";
$dsn="mysql:host=localhost;dbname=$database;charset=utf8mb4";
$username="root";
$password="";
$db=new DB($dsn,$username,$password);


// .............................. Test Select ......................

// $db->column("name","description");

// $db->table("history")->get();
// print_r($v);

$db->table("history")->where("id","=","29" )->orderBy("BGT","name","id")->get();

?>