<?php

// 클래스 = 선언 => 생성 => 호출

//데이터베이스 선언
class DataBase
{   
    //복합객체 - 객체지향의 은닉화
    //public , private, protected
    public $connect;
    private $Table;

    //겟터섹터 ?
    public function setTable($name){
        $this ->Table =$name;

       
        return $this;
    }
    public function getTable()
    {
        return $this ->Table;
    }
    //생성자 메소드 
    public function __construct($config)
    {
         //테이블 객체 연결
         $this->Table =new Table($this);
        echo "클래스 생성";
        
        $this->connect = new mysqli($config['host'], $config['user'],
        $config['passwd'],$config['database']);
        if(!$this ->connect->connect_errno) {
        //성공 : connect_errno = 0 .. ! 1
        //실패 : connect_errno = 1 .. ! 0
            echo "DB접속 성공"; 
        }else{
            echo "DB접속 실패";
        }

    }

    public function queryExecute($query)
    {   
        $result = mysqli_query($this->connect, $query);
        if($result)  {
            echo "쿼리 성공";
        } else{
            print "쿼리 실패";
        }
        return $result;
    }
    
    //테이블 확인
    public function isTable($tablename)
    {
        $query = "SHOW TABLES";
        $result = 
        $this->queryExecute($query);
        
        $count = mysqli_num_rows($result);
        echo "테이블 갯수는=".$count;
        for($i=0;$i<$count;$i++){
            $row =mysqli_fetch_object($result);
            if($row->Tables_in_php == $tablename){
                return true;
            }  
            //print_r($row);
        }   
        return false; 
    }
}