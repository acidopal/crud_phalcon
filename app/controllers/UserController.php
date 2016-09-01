<?php
use Phalcon\Mvc\Model\Criteria;

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
       if ($this->session->has('auth')){

        }else{
          $this->response->redirect('login');
        }
    	$data_user = User::find();
    	$this->view->data_user=$data_user;
    }

    public function editAction($id)
   	{
   		$user = User::findFirst($id);

   		$this->view->id=$user->id;
   		$this->view->username=$user->username;
   		$this->view->nama=$user->nama;
   		$this->view->email=$user->email;
   	}
   	public function updateAction()
   	{
   		$id = $this->request->getPost("id");
   		$user = User::findFirstById($id);

      $user->id = $id;
   		$user->username = $this->request->getPost("username");
   		$user->nama = $this->request->getPost("nama");
   		$user->email = $this->request->getPost("email");

   		if (!$user->save()) {
    		 	echo "Gagal Disimpan";
    		 }
    			else
    		 {
    			echo "Data Berhasil Diupdate";
    		 }
   	  }

     public function searchAction()
     {
         if ($this->request->isPost()) {
               $query = Criteria::fromInput($this->di, "User", $this->request->getPost());
               $this->persistent->searchParams = $query->getParams();
          } 
         
          $parameters = array();

          if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
          }
          $user = User::find($parameters);
          $this->view->search=$user;
     }

    
}   
