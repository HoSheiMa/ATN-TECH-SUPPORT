<?php
include '../configs/index.php';

class LoginController {
    protected $conn = null;
    public function conn($conn) {
        $this->conn = $conn;
    }
    public function logout() {
        $_SESSION['user'] = null;
        return header('Location: /');
    }
    public function login($username, $password) {
        $statement = $this->conn->prepare('SELECT * FROM `users` WHERE `username`=:username or`email`=:username');
        $statement->execute([
            ":username" => $username,
            ":password" => $password
        ]);
        
        
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if ($statement->rowCount() > 0){
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = ($row);

                return header('Location: /console.php');
            }
        }
        $_SESSION['errors'] = array(
            "Login Failed" => " Your Password or Username/Email is incorrect."
        );
        return header('Location: /login.php');

    }
}



if (isset($_POST['method']) || isset($_GET['method'])) {
    $m = isset($_POST['method']) ?$_POST['method'] : $_GET['method'] ;
    $l = new LoginController();
    $l->conn($conn);
    switch ($m) {
        //validation
        case 'login':

            if (isset($_POST['user-email']) && isset($_POST['password']) ) {

                $l->login($_POST['user-email'], $_POST['password']);
            }
            break;

        case 'logout':


                $l->logout();
            break;
        default:
            break;
    }

}