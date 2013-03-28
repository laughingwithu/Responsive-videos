<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> 
<style type="text/css">
table#videoBlockSetup th {font-weight: bold; text-style: normal; padding-right: 8px; white-space: nowrap; vertical-align:top ; padding-bottom:8px}
table#videoBlockSetup td{ font-size:12px; vertical-align:top; padding-bottom:8px;}
table#videoBlockSetup .note{ font-size:10px; color:#999999; font-weight:normal }
</style> 

<table id="videoBlockSetup" style="width:100%"> 
	<tr>
		<th><?php echo t('Title')?></th>
		<td><input type="text" style="width: 230px" name="title" value="<?php echo $bObj->title?>"/></td>
	</tr>	
	<tr>
		<th><?php echo t('Embed URL')?></th>
		<td>
			<input type="text" style="width: 230px" id="VideoURL" name="videoURL" value="<?php echo $bObj->videoURL?>" />
		</td>
	</tr>
	<tr>
		<th><?php echo t('Examples')?></th>
		<td>
			<p>You need to get the actual embed url, this involves getting the iframe embed code and then just selecting the src url. This is not a fool proof addon and if you merely copy a video url it will not work.</p>
			<p>Depending on the up take I might consider adding fool proof measures for the most common sites and then leaving an option to embed video.</p>
		</td>
	</tr>
</table>