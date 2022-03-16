<?php
class con{                                                                                           //创建一个连接类con
        private $hostname;                                                                  //定义服务器地址
        private $username;                                                                  //定义登录数据库的用户名
        private $userpwd;                                                                    //定义登录数据库的密码
        private $databasename;
        public $conn;                                                                            //存储getcon函数返回的连接句柄（资源类型）
        public function __construct($x,$y,$m,$n){                         //定义该类的构造函数，双下划线
                $this->hostname=$x;
                $this->username=$y;
                $this->userpwd=$m;
                $this->databasename=$n;
         } 
        public function getcon(){                                                       //定义用于连接数据库的函数
                $this->conn=mysql_connect($this->hostname,$this->username,$this->userpwd);  
                mysql_select_db($this->databasename,$this->conn);
                return $this->conn;	  
        }
}

?>