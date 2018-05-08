<div class="form">
<h2>Page Edit - Confirm</h2>
<?php echo $this->Form->create('Page')?>
<table>
	<col />
	<col />
	<tr>
		<th>Title</th>
		<td><?php echo $page['Page']['title']?></td>
	</tr>
	<tr>
		<th>Body</th>
		<td><?php echo $page['Page']['body']?></td>
	</tr>
	<tr>
		<th colspan="2"><?php echo $this->Form->submit('submit', array('type' => 'submit'))?></th>
	</tr>
</table>
<?php echo $this->Form->end()?>
</div>
