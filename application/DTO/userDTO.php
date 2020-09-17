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
        private $age;


        public function __construct($id_user,
                $first_name,
                $last_name,
                $email,
                $phone_number,
                $address,
                $city,
                $postal_code,
                $age){
            $this->id_user = $id_user;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->phone_number = $phone_number;
            $this->address = $address;
            $this->city = $city;
            $this->postal_code = $postal_code;
            $this->age = $age;
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

        public function get_age():string{
            return $this->age;
        }

       
    }
?>