<?php defined('KOOWA') or die; ?>

<module position="sidebar-b" style="simple"></module>

<div id="entity-add-wrapper" class="hide">
<?= @view('todo')->layout('form')->actor($actor) ?>
</div>

<?= @helper('ui.searchbox',@route('layout=list')) ?>

<div class="an-entities-wrapper">
	<?= @template('list') ?>
</div>