<?php
    require_once(PATH_DTO."/userDTO.php");
    class UserParser {

        public Static function parse_post_form(){
            $id_user = null;
            $first_name = null;
            $last_name = null;
            $email = null;
            $phone_number = null;
            $address = null;
            $city = null;
            $postal_code = null;
            $age = null;

            if(isset($_POST["id_user"])){
                $id_user = $_POST["id_user"];
            }
            if(isset($_POST["first_name"])){
                $first_name = $_POST["first_name"];
            }
            if(isset($_POST["last_name"])){
                $last_name = $_POST["last_name"];
            }
            if(isset($_POST["email"])){
                $email = $_POST["email"];
            }
            if(isset($_POST["phone_number"])){
                $phone_number = $_POST["phone_number"];
            }
            if(isset($_POST["address"])){
                $address = $_POST["address"];
            }
            if(isset($_POST["city"])){
                $city = $_POST["city"];
            }
            if(isset($_POST["postal_code"])){
                $postal_code = $_POST["postal_code"];
            }
            if(isset($_POST["age"])){
                $age = $_POST["age"];
            }
            return new UserDTO($id_user ,$first_name, $last_name, $email, $phone_number, $address, $city, $postal_code, $age);
        }

        public Static function parseWithString(){
            parse_str(file_get_contents("php://input"),$post_vars);

            $id_user = null;
            $first_name = null;
            $last_name = null;
            $email = null;
            $phone_number = null;
            $address = null;
            $city = null;
            $postal_code = null;
            $age = null;
            
            if(isset($post_vars["id_user"])){
                $id_user = $post_vars["id_user"];
            }
            if(isset($post_vars["first_name"])){
                $first_name = $post_vars["first_name"];
            }
            if(isset($post_vars["last_name"])){
                $last_name = $post_vars["last_name"];
            }
            
            return new UserDTO($id_user ,$first_name, $last_name, $email, $phone_number, $address, $city, $postal_code, $age);
        }

        public Static function parse_sql_row($row){
        

            $id_user = null;
            $first_name = null;
            $last_name = null;
            $email = null;
            $phone_number = null;
            $address = null;
            $city = null;
            $postal_code = null;
            $age = null;
            
            if(isset($row["id_user"])){
                $id_user = $row["id_user"];
            }
            if(isset($row["first_name"])){
                $first_name = $row["first_name"];
            }
            if(isset($row["last_name"])){
                $last_name = $row["last_name"];
            }
            if(isset($row["email"])){
                $email = $row["email"];
            }
            if(isset($row["phone_number"])){
                $phone_number = $row["phone_number"];
            }
            if(isset($row["address"])){
                $address = $row["address"];
            }
            if(isset($row["city"])){
                $city = $row["city"];
            }
            if(isset($row["postal_code"])){
                $postal_code = $row["postal_code"];
            }
            if(isset($row["age"])){
                $age = $row["age"];
            }
            
            return new UserDTO($id_user ,$first_name, $last_name, $email, $phone_number, $address, $city, $postal_code, $age);
        }
    }

?>