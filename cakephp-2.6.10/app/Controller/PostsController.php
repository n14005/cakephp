<?php

class PostsController extends AppController{
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('posts',$this->Post->find('all'));
    $this->set('title_for_layout',' 記事一覧');
  }

  public function view($id = null) {
    $this->Post->id = $id;
    $this->set('post', $this->Post->read());
  }

 public function add() {
      if ($this->request->is('post') || $this->request->is('put')){
              $this->Post->create();
                  if ($this->Post->save($this->request->data)) {
                              //画像保存先のパス
                              $path = IMAGES;
                              $image = $this->request->data['Post']['image'];
                              move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
                              $data = array(
                                'Post' => array(
                                  'img' => $image['name']
                                )
                              );
                              $this->Post->save($data);
                              $this->Session->setFlash(__('Your post has been saved.'));
                  }else{
                    $this->Session->setFlash('画像が登録できませんでした');
                  }
              return $this->redirect(array('action' => 'index'));
      }
 }


  public function deletes($id = null){
    if ($this->request->is('post')) {                               
      $this->Post->create();
      $pas = $this->Post->field('password');
      if ( $pas == $this->request->data['Post']['pass']) {
        $this->redirect(array('controller' => 'posts','action' => 'edit',$id));
      }
      $this->Session->setFlash(__('パスワードが間違っています'));
    }
  }

  public function test(){
    if ($this->request->is('post')){
      $this->Post->create();
      $pas = $this->request->data['Post']['test']; 
      $id = $this->request->data['Post']['id'];
      if( $pas == $this->request->data['Post']['pass']){
        if ($this->Post->delete($id)) {
          $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id)));
        }
        $this->redirect(array('controller' => 'posts', 'action' => 'index'));
      }else{
        $this->Session->setFlash(__('パスワードが間違っています'));
        $this->redirect(array('controller' => 'posts', 'action' => 'view',$id));
      }
    }
  }

  public function edit($id = null){
    $this->Post->id = $id;
    if ($this->request->is('get')){
      $this->request->data = $this->Post->read();
    } else {
      if ($this->Post->save($this->request->data)){
        $this->Session->setFlash('success!');
        $this->redirect(array('action' => 'index'));
      } else{
        $this->Session->setFlash('failed!');
      }
    }
  }

  public function delete($id){
    if ($this->request->is('get')){
      throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)){
      $this->Session->setFlash('Deleted!');
      $this->redirect(array('action' => 'index'));
    }
  }


}
