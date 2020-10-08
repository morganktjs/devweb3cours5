<?php
    require_once(PATH_CORE."/dbModel.php");
    require_once(PATH_DTO."/userDTO.php");
    require_once(PATH_PARSER."/userParser.php");
    require_once(PATH_EXCEPTION."/noUserFoundException.php");
    require_once(PATH_EXCEPTION."/insertUserException.php");

    class UserModel extends dbModel
    {
        const GET_ALL_USERS_PROC_NAME = "get_all_users";
        const GET_USER_BY_ID_PROC_NAME = "get_user_by_id";
        const ADD_USER_PROC_NAME = "add_user";
        const DELETE_USER_PROC_NAME = "delete_user";
        const GET_USER_CREDENTIALS_FROM_PROC_NAME = "get_user_credentials_from_email";

        public function get_all_users():array{  
            /*
            $result = $this->mysqli->query("CALL ".self::GET_ALL_USERS_PROC_NAME."()");

            $users = array();
            while ($row = $result->fetch_assoc()) {
                array_push($users, UserParser::parse_sql_row($row));
            }
            return $users;*/
            $pdo = $this->GetPDOInstance();
            $statementHandle = $pdo->query("CALL ".self::GET_ALL_USERS_PROC_NAME."()");
            $users = $statementHandle->fetchAll(PDO::FETCH_CLASS, 'UserDTO');
            if($users === false)
            {
                throw new NoUserFoundException();
            }
            return $users;
        }

        public function get_user(int $user_id)
        {
            $pdo = $this->GetPDOInstance();
            $statementHandle = $pdo->query("CALL ".self::GET_USER_BY_ID_PROC_NAME."($user_id)");
            $user = $statementHandle->fetchAll(PDO::FETCH_CLASS, 'UserDTO');
            if($user === false)
            {
                throw new NoUserFoundException();
            }
            return $user;
        }

        public function add_user($user)
        {
            $pdo = $this->GetPDOInstance();
            $statementHandle = $pdo->prepare("CALL ".self::ADD_USER_PROC_NAME."(:first_name, :last_name, :email, :postal_code, :phone_number, :address, :city)");
            try
            {
                $statementHandle->execute([
                    "first_name"=>$user->get_first_name(),
                    "last_name"=>$user->get_last_name(),
                    "email"=>$user->get_email(),
                    "postal_code"=>$user->get_postal_code(),
                    "phone_number"=>$user->get_phone_number(),
                    "address"=>$user->get_address(),
                    "city"=>$user->get_city()
                ]);
            }
            catch(PDOException $e)
            {
                throw new InsertUserException();
            }
        }

        public function delete_user($id_user)
        {
            if($statement = $this->mysqli->prepare("CALL ".self::DELETE_USER_PROC_NAME."(?)")){
                $statement->bind_param('i', $id_user);
                if(!$statement->execute()){
                    //todo error management
                }
                $statement->close();
            }
           
        }

        public function get_credentials_from_email($email)
        {
            $pdo = $this->GetPDOInstance();
            $statementHandle = $pdo->prepare("CALL ".self::GET_USER_CREDENTIALS_FROM_PROC_NAME."(:email)");
            $statementHandle->execute(["email"=>$email]);
            $user = $statementHandle->fetch(PDO::FETCH_ASSOC);
            if($user === false)
            {
                throw new NoUserFoundException();
            }
            return $user;
        }
 
    }
?>