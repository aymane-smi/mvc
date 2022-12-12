<?php
class Login extends Controller
{
    private $AdminModel;

    public function __construct()
    {
        $this->AdminModel = $this->model('Admin');
    }

    public function index()
    {
        $this->view('login');
    }

    public function authenticated()
    {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $admin = $this->AdminModel->login($_POST["username"], $_POST["password"]);
            if ($admin) {
                $_SESSSION["id"] = $admin->id;
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $admin->username;
                $_SESSION["login_error"] = false;
                header("Location: /Dashboard");
            } else {
                //echo "not";
                $_SESSION["login_error"] = "username/password incorrect";
                //echo $_SESSION["login_error"];
                header("Location: /Login");
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /Login");
    }
}
