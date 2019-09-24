
		<center><h2>Update Article</h2></center>
<?= form_open("article/update_article/{$arts->id}"); ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>S.NO.</th>
			<th>ARTICLE NAME</th>
			<th>CATEGORY</th>
			<th>ARTICLE BODY</th>
			<th>PUBLISHED ON</th>
			<th colspan="2">ACTIONS</th>
		</tr>
	</thead>
	<tbody>
		<?php $count=1; ?>

		<tr>
			<td><?=$count++;?></td>
			<td><input type="text" name="uname" class="form-control" value="<?= $arts->article_name; ?>"></td>
			<td><input type="text" name="ucategory" class="form-control" value="<?= $arts->category; ?>"></td>
			<td><input type="text" name="ubody" class="form-control" value="<?= $arts->article_body; ?>"></td>
			<td><input type="date" name="published_on" class="form-control" value="<?= $arts->published_on; ?>"></td>
			<td><input type="submit" name="update" id="update" class="btn btn-success"></td>
		</tr>
	</tbody>
</table>
<?= form_close(); ?>
