<?php

class HomeController extends BaseController
{
    function index()
    {

        $lastPosts = $this->model->getLastPosts(5);
        $this->posts = array_slice($lastPosts, 0 , 5);
        $lastComments = $this->model->getLastComments(5);
        $this->comment = $lastComments;
    }

    function view($id)
    {
        $this->post = $this->model->getPostById($id);
        $this->comment = $this->model->getCommentsById($id);
    }
}
?>