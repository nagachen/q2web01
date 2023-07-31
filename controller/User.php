<?php
include_once "DB.php";

class User extends DB
{

    function __construct()
    {
        parent::__construct('users');
    }

    function chk_acc($user)
    {
        $chk = $this->count(['acc' => $user['acc']]);
        
        if ($chk > 0) {
            //內有user name資料 確認密碼
            $chk = $this->chk_pw($user);
            if ($chk > 0) {
                //密碼 和帳號ok
                $_SESSION['user'] = $user['acc'];
                return 1; //帳密OK
            } else {
                
                return 2; //密碼失敗
            }
        } else {
            return 0; //帳號失敗
        }
    }

    function chk_pw($user)
    {
        return $this->count($user);
    }

    function backend(){
        $data=[
            'rows'=>$this->all(),
        ];
        $this->view("./view/backend/user.php",$data);
    }
}
