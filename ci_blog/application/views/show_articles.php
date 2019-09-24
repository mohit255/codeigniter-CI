
	<a href="<?=base_url();?>" class="btn btn-primary btn-block">Back to Admin</a>

<center><h2>Articles List</h2></center>
<?php if($feedback_success=$this->session->flashdata('feedback_success')): //flashing data if data inserted or not ?>
     
         <span style="color: green; font-family: helvetica;font-weight: bold;"><?php  echo $feedback_success; ?></span>
        
    <?php endif ; ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>S.NO.</th>
			<th>ARTICLE NAME</th>
			<th>CATEGORY</th>
			<th>ARTICLE BODY</th>
			<th>PUBLISHED ON</th>
			<th colspan="2" >ACTIONS</th>
		</tr>
	</thead>

	<tbody>
		<?php $count=1;

		        foreach($articles as $article): ?>
		<tr>
			<td><?=$count++; ?></td>
			<td><?= $article->article_name; ?></td>
			<td><?= $article->category; ?></td>
			<td><?= $article->article_body; ?></td>
			<td><?= $article->published_on; ?></td>
			<td><?=anchor("article/edit_article/{$article->id}", '<button class="btn btn-warning btn-block">EDIT</button>')?></td>
			<td><?=anchor("article/delete_article/{$article->id}", '<button class="btn btn-danger btn-block">DELETE</button>')?></td>
		
		</tr>
		<?php  endforeach; ?>
	</tbody>
</table>