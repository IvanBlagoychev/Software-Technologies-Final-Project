<?php
class CommentsController extends BaseController
{

    function onInit()
    {
        $this->authorize();
    }

    public function index()
    {
        $this->comment = $this->model->getAll();
    }

    
    public function create_comment()
    {
        if($this->isPost){
            $content = $_POST['comment_content'];
            if (strlen($content) < 1){
                $this->setValidationError("comment_content", "Content cannot be empty!");
            }
            if ($this->formValid()) {
                $userId = $_SESSION['user_id'];
                if ($this->model->create($content, $userId)) {
                    $this->addInfoMessage("Comment added.");
                    $this->redirect("home");
                } else{
                    $this->addErrorMessage("Error: cannot add comment.");
                }
            }
        }
    }


    public function delete_comment(int $id)
    {
        if($this->isPost){
            if ($this->model->delete($id)) {
                $this->addInfoMessage("Comment deleted.");
            } else {
                $this->addErrorMessage("Error: cannot delete comment.");
            }
            $this->redirect('comments');
        } else {
            $comment = $this->model->getById($id);
            if (!$comment) {
                $this->addErrorMessage("Error: comment does not exist.");
                $this->redirect("comments");
            }
            $this->comment = $comment;
        }
    }
}