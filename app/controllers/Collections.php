<?php
class Collections extends Controller
{
    public function __construct()
    {
        $this->ArticleModel = $this->model("Article");
    }

    public function index()
    {
        $data["items"] = $this->ArticleModel->getAll();
        $this->view('collections', $data);
    }
}
