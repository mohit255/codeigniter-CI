<br>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-8">
			<?= anchor('admin/store_article','Add Article',['class'=>'btn btn-primary'])?>
		</div>
	</div>
	<table class="table">
		<thead>
			<th>Sr. No.</th>
			<th>Title</th>
			<th>Article</th>
			<th>Image</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php $c=1; if( count($articles)): ?>
			<?php foreach($articles as $article): ?>
			<tr>
				<td><?= $c ?></td>
				<td><?= $article->title ?></td>
				<td><?= $article->body ?></td>
				<td>
				  <img width="200px" height="200px" src="<?= base_url('upload/')?><?= $article->img; ?>"/>
				</td>
				<td>		
					<?=anchor("admin/edit_article/{$article->id}", '<button class="btn btn-primary">EDIT</button>')?>
					<?=anchor("admin/delete_article/{$article->id}", '<button class="btn btn-danger">DELETE</button>')?>
				</td>
			</tr>
			<?php $c++; endforeach; ?>
			<?php else: ?>
			<tr>
				<td colspan="3">
					No Records Found.
				</td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>