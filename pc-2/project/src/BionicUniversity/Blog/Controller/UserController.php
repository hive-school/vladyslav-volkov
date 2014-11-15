<?php
namespace BionicUniversity\Blog\Controller;

use BionicUniversity\Blog\Model\UserModel;

class UserController
{
    public function indexAction()
    {
        echo '<p>Bold</p>';
        die('asdf');
        $userModel = new UserModel();
        $users = $userModel->getAll();
        echo file_get_contents('../Resources/views/user/test.html');
//        echo json_encode($users);
    }
}