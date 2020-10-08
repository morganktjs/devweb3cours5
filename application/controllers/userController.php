<?php
    require_once(PATH_DTO."/userDTO.php");
    require_once(PATH_CORE."/controller.php");
    require_once(PATH_MODELS."/userModel.php");
    require_once(PATH_PARSER."/userParser.php");
    class UserController extends Controller{
        
        const USERS_PAGE_TITLE = "Les usagers";
        const USER_PAGE_TITLE = "Profil d'usager";
        const ADD_USER_PAGE_TITLE = "Ajout d'un usager";
        private  $user_model;
        
        public function __construct(){
            $this->user_model = new UserModel();
        }

       
        public function show(){
            if(func_num_args() >0){
                $id_user = func_get_arg(0);
            }
            
            if(isset($id_user) && !empty(trim($id_user))){
                $this->show_one_user($id_user);
            }else{
                $this->show_all_user();
            }
        }

        public function addUser(){
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $this->show_add_user();
            }
            else if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $user_to_add_DTO = UserParser::parse_post_form();
                $this->add_user($user_to_add_DTO);
                header('Location: /user/show');
            }
            
        }

        public function delete_user($id_user_to_delete){
            $user = $this->user_model->delete_user($id_user_to_delete);
        }

        private function show_one_user($id_user)
        {
            try
            {
                $user = $this->user_model->get_user($id_user);
                $data = array("user"=>$user);
                $view = new View("userView.php");
                $content = $view->render($data);
                $this->render_template_with_content(self::USER_PAGE_TITLE, $content);
            }
            catch(NoUserFoundException $e)
            {
                $this->render_error("Aucun usager trouvé.", "Aucun usager trouvé.");
            }
        }

        private function show_all_user(){
            try
            {
                $users = $this->user_model->get_all_users();
                $data = array("users"=>$users);
                $view = new View("usersView.php");
                $content = $view->render($data);
                echo $this->render_template_with_content(self::USERS_PAGE_TITLE, $content);
            }
            catch(NoUserFoundException $e)
            {
                $this->render_error("Aucun usager trouvé.", "Aucun usager trouvé.");
            }
        }

        private function show_add_user(){
            $view = new View("addUserView.php");
            $data = array();
            $content = $view->render($data);
            echo $this->render_template_with_content(self::ADD_USER_PAGE_TITLE, $content);
        }

        private function add_user($user_to_add_DTO){
            $this->user_model->add_user($user_to_add_DTO);
        }
    }
?>