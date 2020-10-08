<?php
    class UserDTO
    {
        private $id_user;
        private $first_name;
        private $last_name;
        private $email;
        private $phone_number;
        private $address;
        private $city;
        private $postal_code;
        private $password;

        public function __construct(){
        }

        public function set_form_post($post_array){
            foreach ($post_array as $key => $value){
                $this->$key = $value;
            }
        }

        public function get_id(){
            return $this->id_user;
        }

        public function get_first_name():string{
            return $this->first_name;
        }

        public function get_last_name():string{
            return $this->last_name;
        }

        public function get_email():string{
            return $this->email;
        }

        public function get_phone_number():string{
            return $this->phone_number;
        }

        public function get_address():string{
            return $this->address;
        }

        public function get_city():string{
            return $this->city;
        }

        public function get_postal_code():string{
            return $this->postal_code;
        }

        public function get_password():string{
            return $this->password;
        }

       
    }
?>