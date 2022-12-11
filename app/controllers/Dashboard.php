<?php
class Dashboard extends Controller
{

    private $ArticleModel;

    public function __construct()
    {
        // if (isset($_SESSION["id"])) {
        //     $this->ArticleModel = $this->model('Article');
        // } else {
        //     header("Location: /Login");
        // }
        $this->ArticleModel = $this->model('Article');
    }

    public function index()
    {
        $data['items'] = $this->ArticleModel->getAll();
        $this->view('dashboard', $data);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->ArticleModel->addArticle($_POST["name"], $_POST["price"], $_FILES["image"]["name"]);
            move_uploaded_file($_FILES['image']['tmp_name'], "/var/www/html/public/assets/" . $_FILES['image']['name']);
        }
        header("Location: /Dashboard");
    }

    public function delete($id)
    {
        $item = $this->ArticleModel->getById($id);
        $this->ArticleModel->removeById($id);
        unlink("../../public/assets/{$item->img}");
        header("Location: /Dashboard");
    }

    public function edit($id)
    {
        echo $id;
    }
}
