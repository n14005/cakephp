<?php

class CommentsController extends AppController{
  public $helpers = array('Html', 'Form');



  public function add(){
    if ($this->request->is('post')){
      if($this->Comment->save($this->request->data)){
        $this->Session->setFlash('Success!');
        $this->redirect(array('controller'=>'posts','action'=>'view',$this->data['Comment']['post_id']));
      }else{
        $this->Session->setFlash('failed!');
      }
    }
  }

  public function test(){
    if ($this->request->is('post')){
      if($this->Comment->save($this->request->data)){
      $this->redirect(array('controller'=>'posts','action'=>'index'));
    }
  }
  }

/*  public function delete($id){
    if ($this->request->is('get')){
      throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)){
      $this->Session->setFlash('Deleted!');
      $this->redirect(array('action' => 'index'));
    }
}
 */
}

