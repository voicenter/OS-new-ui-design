<?php
/*
 * Copyright (C) 2011 OpenSIPS Project
 *
 * This file is part of opensips-cp, a free Web Control Panel Application for 
 * OpenSIPS SIP server.
 *
 * opensips-cp is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * opensips-cp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

$id=$_GET[$custom_config[$module_id][$_SESSION[$module_id]['submenu_item_id']]['custom_table_primary_key']];

$sql = "select * from ".$table." where ".$custom_config[$module_id][$_SESSION[$module_id]['submenu_item_id']]['custom_table_primary_key']."='".$id."'";
$resultset = $link->queryAll($sql);
$link->disconnect();

?>

<?php
	if (isset($form_error) && $form_error!="")
		echo '<div class="formError" ><strong>Error </strong>'.$form_error.'</div>';
	else if (isset($success) && $success!="")
		echo '<div class="formSuccess" ><strong>Success </strong>'.$success.'</div>';
?>

			<form id="editentry" class="block-content form" action="<?=$page_name?>?action=modify&id=<?=$id?>" method="post">
				<table width="400" cellspacing="2" cellpadding="2" border="0">
					<tr align="center">
						<td colspan="2" class="tviewerTitle">
							Edit Entry
						</td>
					</tr>
				<?php foreach ($custom_config[$module_id][$_SESSION[$module_id]['submenu_item_id']]['custom_table_column_defs'] as $key => $value) { ?>	
					<?php if ($value['show_in_edit_form'] == true ){ ?>
					<tr>
						<td class="dataRecord">
							<label for="<?=$key?>"><?=$value['header']?></label>
						</td>
						<td class="dataRecord" width="275">
							<?php switch ($value['type']) { 
								case "text": ?>
									<input 	id="<?=$key?>" 
										name="<?=$key?>" 
										class="dataInput" 
										type="text" 
										value="<?php if (isset($_SESSION[$key])) echo $_SESSION[$key]; else echo $resultset[0][$key];?>" 
									/> 
									<?php break; ?>	
							<?php 	case "combo": ?>
									<?php print_custom_combo($key,isset($resultset[0][$key])?$resultset[0][$key]:$value['default_value'],$value['default_display'],$value['combo_default_values'],$value['combo_table'],$value['combo_value_col'],$value['combo_display_col'],$value['disabled']); ?>	
									<?php break; ?>	
							<?php } ?>
						</td>
					</tr>
						<?php } ?>
				<?php } ?>

					<tr>
						<td colspan="2" class="dataRecord" align="center">
							<input type="submit" name="add" value="Update" class="formButton">
							<form>
							<input type="button" value="Reset" class="formButton" onclick="window.location.href='tviewer.php?action=edit&id=<?=$id?>'">
							</form>
						</td>
					</tr>

					<tr height="10">
						<td colspan="2" class="searchTitle">
						<img src="../../../images/share/spacer.gif" width="5" height="5">
					</td>
				</tr>
			</table>
			</form>
		<? print_back_button(); ?>

