<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$url = parse_url($videoURL);
parse_str($url['query'], $query);
parse_str($url['path'], $path);
?><?php
global $c;

if ($c->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item" style="width:100%; height:160px;">
		<div style="padding:8px 0px;"><?php  echo t('Responsive Video disabled in edit mode.'); ?></div>
	</div>
<?php  } else { ?>
	<div id="video<?php  echo $bID?>" class="responsive-video"><iframe src="<?php echo $videoURL?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

<?php  }?>