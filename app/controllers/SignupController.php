<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

  	public function registerAction()
    {
        $sign_up = new User();
        $sign_up->assign(array(
              'username' => $this->request->getPost('username'),
              'nama' => $this->request->getPost('nama'),
              'email' => $this->request->getPost('email'),
              'pass' => $this->request->getPost('pass'),
            )
        );
        
        $sign_up->save();
        return $this->response->redirect('user');
    }
}

