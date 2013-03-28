<?php defined('C5_EXECUTE') or die(_("Access Denied."));

class ResponsiveVideosPackage extends Package {
	protected $pkgHandle = 'Responsive_Videos';
	protected $appVersionRequired = '5.4.1';
	protected $pkgVersion = '1.0';
	
	public function getPackageName() {
		return t('Responsive Videos');
	}
	
	public function getPackageDescription() {
		return t('Responsive Videos');
	}
	
/* DONE! You generally don't need to change anything below this line.
**************************************************************************************************/
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage($this->pkgHandle, $pkg);
	}
	
	public function upgrade() {
		$pkg = Package::getByHandle($this->pkgHandle);
		parent::upgrade();
	}
	
}