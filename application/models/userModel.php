<?php
    require_once(PATH_CORE."/dbModel.php");
    require_once(PATH_DTO."/userDTO.php");
    require_once(PATH_PARSER."/userParser.php");
    class UserModel extends dbModel
    {
        const GET_ALL_USERS_PROC_NAME = "get_all_users";
        const GET_USER_BY_ID_PROC_NAME = "get_user_by_id";
        const ADD_USER_PROC_NAME = "add_user";
        const DELETE_USER_PROC_NAME = "delete_user";

        public function get_all_users():array{  
            $result = $this->mysqli->query("CALL ".self::GET_ALL_USERS_PROC_NAME."()");

            $users = array();
            while ($row = $result->fetch_assoc()) {
                array_push($users, UserParser::parse_sql_row($row));
            }
            return $users;
        }

        public function get_user(int $user_id){
            //exercice cours 2
        }

        public function add_user($user){
            if($statement = $this->mysqli->prepare("CALL ".self::ADD_USER_PROC_NAME."(?,?,?,?,?,?,?)")){
                $first_name = $user->get_first_name();
                $last_name = $user->get_last_name();
                $email = $user->get_email();
                $postal_code = $user->get_postal_code();
                $phone_number = $user->get_phone_number();
                $address = $user->get_address();
                $city = $user->get_city();
                
                $age = $user->get_age();
                $statement->bind_param('sssssss',
                    $first_name,
                    $last_name,
                    $email,
                    $postal_code,
                    $phone_number,
                    $address,
                    $city);
                if(!$statement->execute()){
                    //todo error management
                }
                $statement->close();
            }
           
        }

        public function delete_user($id_user){
            if($statement = $this->mysqli->prepare("CALL ".self::DELETE_USER_PROC_NAME."(?)")){
                $statement->bind_param('i', $id_user);
                if(!$statement->execute()){
                    //todo error management
                }
                $statement->close();
            }
           
        }
 
    }
?>