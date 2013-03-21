<?php
App::uses('Component', 'Controller');
/**
* String Component
*/
class StringComponent extends Component {

/**
 *@desc Cette fonction supprime les accents d'une chaine
 *@param string la chaine a traiter
 *@return la chaine modifiée
 */
    function stripAccents($string){
        return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
    'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }
}
?>