<?php
App::uses('Component', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
* Folder Component
*/
class FolderComponent extends Component {

/**
 *@desc Cette fonction import les types de question
  */
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