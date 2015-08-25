<h2>Add post</h2>

<?php
echo $this->Form->create('Post', array('type'=>'file', 'enctype' => 'multipart/form-data'));
echo $this->Form->input('name',array('rows'=>1));
echo $this->Form->input('title');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->input('password',array('type' => 'Password'));
echo $this->Form->input('Post.image', array('label' => false, 'type' => 'file', 'multiple'));
echo $this->Form->end('Save Post');

