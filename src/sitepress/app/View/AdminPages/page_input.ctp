<div class="form">
<h2>Page Edit - Input</h2>
<?php echo $this->Form->create('Page')?>
<table>
	<col />
	<col />
	<tr>
		<th>Title</th>
		<td><?php echo $this->Form->input('title', array('type' => 'text'))?></td>
	</tr>
	<tr>
		<th>Body</th>
		<td><?php echo $this->Form->input('body', array('type' => 'textarea'))?></td>
	</tr>
	<tr>
		<th colspan="2"><?php echo $this->Form->submit('submit', array('type' => 'submit'))?></th>
	</tr>
</table>
<?php echo $this->Form->end()?>
</div>
