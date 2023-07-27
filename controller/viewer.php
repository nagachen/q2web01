<?php
    include_once "db.php";
    class Viewer extends Db{

        function __construct(){
            parent::__construct('viewer');
        }

    function todayViewer(){
        $today=date("Y-m-d");
        if(!isset($_SESSION['viewer'])){
            $chk=$this->count(['date'=>$today]);
            if($chk>0){ //如果今天有記錄但沒來過,就今天人數+1
                $row=$this->find(['date'=>$today]);
                $row['viewer']++;
                $this->save($row);
                $_SESSION['viewer']=1;
                return $row['viewer'];
            }else{
                //如果今天沒有記錄沒來過，就新增一筆記錄
                $this->save(['date'=>$today,'viewer'=>1]);
                $_SESSION['viewer']=1;
                return 1;
            }
        }else{
            //如果今天已來過，就將資料秀出來,秀出今天造訪人次
            return $this->find(['date'=>$today])['viewer'];
        }
    }

    function totalViewer(){
        return $this->sum('viewer');
    }
    }

?>