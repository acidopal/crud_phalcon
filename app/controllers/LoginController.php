<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    private function _registerSession(User $user)
      {
      $this->session->set('auth', array(
              'isLog' => 'Y',
              'id' => $user->id,
              'username' => $user->username
          ));
      }
    
    public function loginAction()
    {
          if ($this->request->isPost()) {
        $username = $this->request->getPost('username');
              $pass = $this->request->getPost('pass');
              $user = User::findFirst("username='$username'");
        if ($user)
        {
          if($pass==$user->pass)
          {
            $this->_registerSession($user);
            $this->response->redirect('user');
            }
        }
        echo "Username atau pass salah";
        return $this->dispatcher->forward(array("action" => "index"));
      }
    }
    
    public function logoutAction()
    {
      $this->session->destroy();
     $this->response->redirect('login');
    }

}

