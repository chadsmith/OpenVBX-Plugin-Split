<?php
$defaultNumberOfChoices = 2;
$choices = AppletInstance::getValue('choices[]', array('', ''));
?>
<div class="vbx-applet cycle-applet">
		<table class="vbx-menu-grid options-table">
			<thead>
				<tr>
					<td>Applet</td>
					<td>Add &amp; Remove</td>
				</tr>
			</thead>
			<tfoot>
				<tr class="hide">
					<td>
						<?php echo AppletUI::dropZone('new-choices[]', 'Drop applet here'); ?>
					</td>
					<td>
						<a href="" class="add action"><span class="replace">Add</span></a> <a href="" class="remove action"><span class="replace">Remove</span></a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach($choices as $id => $choice): ?>
				<tr>
					<td>
						<?php echo AppletUI::dropZone('choices['.($id).']', 'Drop applet here'); ?>
					</td>
					<td>
						<a href="" class="add action"><span class="replace">Add</span></a> <a href="" class="remove action"><span class="replace">Remove</span></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table><!-- .vbx-menu-grid -->
</div><!-- .vbx-applet -->
