<?php
/**
* String Component
*/
class StringComponent extends Component
{
/**
 *@desc Le constructeur de la classe, il n'y a rien à spécifier.
 */
    function __construct(argument)
    {
        //rien a specifier
    }

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