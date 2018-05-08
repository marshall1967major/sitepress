<script type="text/javascript">

function createPagePanel(){

	$("#create_page_panel").dialog({
		modal: true,
		buttons: {
			"OK": function(){
				$(this).dialog('close');
			}
		}
	});

}

</script>

<style>

#create_page_panel {
	display: none;
}

</style>

<h1>Pages / Categories</h1>

<div id="search_pages_panel" class="search">
<h2>Search Page Panel</h2>

	<?php echo $this->Form->create('SearchPages')?>
	<table>
		<th>Keyword</th>
		<td><?php echo $this->Form->input('SearchPages', array('type' => 'text'))?></td>
		<td><?php echo $this->Form->submit('Search for Pages')?></td>
	</table>
	<?php echo $this->Form->end()?>
</div>

<div class="create_button">
	<?php echo $this->Form->create('CreatePagesButton')?>
	<?php echo $this->Form->submit('Create New Page', array('onclick' => 'location=\'/admin/pages/page/input\';return false;'))?>
	<?php echo $this->Form->end()?>
</div>

<div id="page_list_panel" class="list">
<h2>Page List Panel</h2>
<table>
	<col />
	<col />
	<col />
	<tr>
		<th>No</th>
		<th>Category</th>
		<th>Title</th>
		<th>Last update time</th>
		<th>Author</th>
		<th>Function</th>
	</tr>
	<?php if(!empty($pagesArray)):?>
	<?php foreach($pagesArray as $page):?>
	<tr>
		<td><?php echo $page['Pages']['pages_id']?></td>
		<td><?php echo $page['Pages']['title']?></td>
		<td>
			<?php if(!empty($page['Pages']['update_time'])):?>
			<?php echo $page['Pages']['update_time']?>
			<?php else:?>
			<?php echo $page['Pages']['create_time']?>
			<?php endif;?>
		</td>
		<td><?php echo $page['Pages']['pages_id']?></td>
		<td><?php echo $page['Pages']['pages_id']?></td>
	</tr>
	<?php endforeach;?>
	<?php else:?>
	<tr>
		<td colspan="6">Not found pages.</td>
	</tr>
	<?php endif;?>
</table>
</div>


<div id="create_page_panel" class="form">
<h2>Create Page Panel</h2>
<?php echo $this->Form->create('CreatePages')?>
<table>
	<col />
	<col />
	<tr>
		<th>No</th>
		<td><?php $this->Form->input('no')?></td>
	</tr>
</table>
<?php echo $this->Form->end()?>
</div>
