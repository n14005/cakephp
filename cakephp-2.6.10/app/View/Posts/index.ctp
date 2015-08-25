<h2>記事一覧</h2>

<table>                                                                     
      <tr>
          <th>タイトル</th>
          <th>投稿者</th>
          <th>投稿日</th>
      </tr>
<?php foreach ($posts as $post) : ?>
<tr>
<td><?php
echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);
?></td>

 <td><?php echo $post['Post']['name']; ?></td>

 <td><?php echo $post['Post']['created']; ?></td>
</td>
</tr>
<?php endforeach; ?>
</table>

<h2>記事投稿</h2>
<?php echo $this->Html->link('投稿する',array('controller'=>'posts','action'=>'add'));
?>
