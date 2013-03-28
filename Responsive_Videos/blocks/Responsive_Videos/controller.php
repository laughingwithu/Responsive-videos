<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	class ResponsiveVideosBlockController extends BlockController {
		protected $btTable = 'btResponsiveVideos';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "210";
		protected $btCacheBlockRecord = true;
		protected $btCacheBlockOutput = true;
		protected $btCacheBlockOutputOnPost = true;
		protected $btCacheBlockOutputForRegisteredUsers = false;
		public $title = '';
		public $videoURL = "";
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Responsively embeds Videos in your web page from third party websites.");
		}
		public function getBlockTypeName() {
			return t("Responsive Video");
		}
		function on_page_view() {
			$html = Loader::helper('html');
		}
		function __construct($obj = null) {		
			parent::__construct($obj);	
			if(!$this->title) $this->title=t("My Video");
		}
		function view(){ 
			$this->set('bID', $this->bID);	
			$this->set('title', $this->title);
			$this->set('videoURL', $this->videoURL);
		}	
		function save($data) { 
			$args['title'] = isset($data['title']) ? trim($data['title']) : '';
			$args['videoURL'] = isset($data['videoURL']) ? trim($data['videoURL']) : '';
			parent::save($args);
		}
	}
?>