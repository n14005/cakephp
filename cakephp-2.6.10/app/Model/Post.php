<?php 

class Post extends AppModel{
    public $hasMany = "Comment";

    public $validate = array(
      'title' => array(
       'rule' => 'notEmpty' 
     ),
     'body' => array(
      'rule' => 'notEmpty'
    ),
    'password' => array(
      'rule' => 'notEmpty'
    ),
     'name' => array(
       'rule' => 'notEmpty'
     )
   );
}

