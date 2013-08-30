<?php 
require_once 'header.php';
if($_POST) {
	foreach($_POST as $key => $post) {
		$trans_parser->update_entry($result_arr[$key]['fullmsgid'], $post);
	}
	$trans_parser->write($trans_file);
}
?>
<form action="" method="POST">
	<button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-ok"></span> Save</button>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Key</th>
				<th>Translation</th>
			</tr>
		</thead>
		<tbody>
		<?php $counter = 0; foreach($result_arr as $key => $val) :?>
			<tr>
				<td><?php echo ++$counter ?></td>
				<td style="width: 20%"><?php echo htmlspecialchars($val['fullmsgid']) ?></td>
				<td><textarea class="form-control" name="<?php echo $key ?>"><?php echo implode($val['msgstr']) ?></textarea></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
	<button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-ok"></span> Save</button>
</form>
<div class="clearfix"></div>
<?php require_once 'footer.php';