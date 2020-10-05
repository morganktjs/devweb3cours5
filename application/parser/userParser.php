<?php
    require_once(PATH_DTO."/userDTO.php");
    class UserParser {

        public Static function parse_post_form(){
           

            if(isset($_POST["id_user"])){
                //Error validation
            }
            if(isset($_POST["first_name"])){
               //Error validation
            }
            if(isset($_POST["last_name"])){
               //Error validation
            }
            if(isset($_POST["email"])){
               //Error validation
            }
            if(isset($_POST["phone_number"])){
               //Error validation
            }
            if(isset($_POST["address"])){
               //Error validation
            }
            if(isset($_POST["city"])){
               //Error validation
            }
            if(isset($_POST["postal_code"])){
               //Error validation
            }
            if(isset($_POST["age"])){
                //Error validation
            }
            $userDTO = new UserDTO();
            $userDTO->set_form_post($_POST);
            return $userDTO;
        }
  
    }

?>