<?php
App::uses('Component', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
* String Component
*/
class FolderComponent extends Component {

	public function ImportTypeQuestion(){
		$dir = new Folder('../../app/Controller/Question');
		$files = $dir->find('.*Controller\.php');
		foreach ($files as $file) {
			$tab = split('\.php', $file);
			App::import('Controller/Question', $tab[0]);
		}
	}
}
?>