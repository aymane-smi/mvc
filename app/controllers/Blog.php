<?php
class Blog extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('blog');
    }
}
