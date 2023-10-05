<?php
    class User {
        public $name;
        public $email;
        public $password;
        public function SetUserValues($input_name,$input_email,$input_password) {
            $this->name = $input_name;
            $this->email = $input_email;
            $this->password = $input_password;
        }
    }
    class Employee extends User {
        public $title;
        public function SetEmployeeValues($input_name,$input_email,$input_password, $input_title) {
            $this->name = $input_name;
            $this->email = $input_email;
            $this->password = $input_password;
            $this->title = $input_title;
        }
    }
    $user1 = new Employee();
    $user1->SetEmployeeValues('Brad','Brad@mail.com','passwordbrad','Software');
    var_dump($user1);
?>