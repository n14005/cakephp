<h2>タイトル</h2>

<p><?php echo h($post['Post']{'title'}); ?></p>

<h2>本文</h2>
<p><?php echo h($post['Post']['body']); ?></p>


<img src="../../app/webroot/img/<?php echo $post['Post']['img']; ?> ">

   
<h2>コメント一覧</h2>

<ul>
<?php foreach ($post['Comment'] as $comment): ?>

<li><?php echo h($comment['body']) ?> -投稿者: <?php echo h($comment['commenter']); ?></li>

<?php endforeach; ?>
</ul>
<p>

<hr>
<h2>コメント投稿</h2>

<?php
echo $this->Form->create('Comment',array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('body', array('rows'=>2));
echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('コメント投稿!');
?>

<?php
echo $this->Form->create('Post',array('action'=>'test'));
echo $this->Form->input('pass',array('type' => 'password'));
echo $this->Form->input('test',array('type'=>'hidden','value' =>$post['Post']['password']));
echo $this->Form->input('id',array('type'=>'hidden','value' =>$post['Post']['id']));
echo $this->Form->end('記事削除');
?>

<?php echo $this->Html->link('記事削除','/posts/deletes/'.$post['Post']['id']);
      ?>     
