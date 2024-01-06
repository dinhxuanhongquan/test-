<?php
    class Database{
        // các thuộc tính của DB
        protected $db_host;
        protected $db_name;
        protected $db_user;
        protected $db_pass;
        // Phương thức khỏi tạo
        public function __construct($host, $name, $user, $pass)
        {
            $this->db_host = $host;
            $this->db_name = $name;
            $this->db_user = $user;
            $this->db_pass = $pass;

        }
        // Phương thức kết nối. Dung DSN.
        public function getConn(){
            $dsn = "mysql:host =($this->db_host);dbname = ($this->db_name);charset=utf8";
            try {
                $conn = new PDO($dsn, $this->db_user, $this->db_pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                exit;

            }
        }
        
    }
?>