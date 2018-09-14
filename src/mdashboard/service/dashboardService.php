<?php
namespace src\mdashboard\service;

use \zil\factory\Session;
use \zil\factory\BuildQuery;
use \zil\factory\Database;
use \zil\factory\Authentication;

class dashboardService{

    public function __construct(){

    } 

    public function auth($username, $password){

        $authkey = (new Authentication(  [ ['master',$username], ['master',$password] ], null , 'INLINE'))->Auth();
        if($authkey != false){

            return true;
        }

        return false;
    }

    public function createUser($f, $s, $a, $p, $e, $b, $abt){

        $con = (new Database())->connect();
        
        $sql = new BuildQuery($con);

        if($sql->create('user', ['', $f, $e, $a, $p, $s, $b, 'null', $abt])){
            return true;
        }   
        
        return false;
        
    }

    public function getUser(int $limit = null, int $key=0){
        $con = (new Database())->connect();
        
        $sql = new BuildQuery($con);

        if(!is_null($limit)){
            if($key == 0)
                $rs = $sql->read('user', [ ['id','!=',0] ], [], ["ORDER BY id DESC LIMIT 0,$limit"]);
            else
                $rs = $sql->read('user', [ ['id',$key] ], [], ["LIMIT 0,$limit"]);
        
            }else{
            $rs = $sql->read('user', [ ['id','!=',0] ], []);
        }
        $data = [];

        while(list($id, $f, $e, $ad, $p, $g, $b, $t, $ab) = $rs->fetch()){
            $data[$id] = ['name' =>$f, 'email'=>$e, 'address'=>$ad, 'phone'=>$p, 'gender'=>$g, 'birthday'=>$b, 'about'=>$ab];
        }

        return $data;
    }

    public function getTotalUserCount(){

        $sql = new BuildQuery( (new Database())->connect() );
        $rs = $sql->read('user', [ ['id','!=',0] ], []);

        return $rs->rowCount();
    }

    public function updateUser($f, $a, $p, $b, $abt, $key){
        
        $sql = new BuildQuery( (new Database())->connect() );

        $rs = $sql->update('user', [ ['id', $key] ], [ ['name', $f], ['address', $a], ['phone', $p], ['aboutme', $abt], ['birthday', $b] ]);

        if($rs->rowCount() == 1)
            return true;
        
        return false;

    }

    public function deleteUser($key){
        
        $con = (new Database())->connect();
        
        $sql = new BuildQuery($con);

        $rs = $sql->delete('user', [ [ 'id', $key] ]);
        if($rs->rowCount() > 0)
            return true;

        return false;
        
    }

}


?>