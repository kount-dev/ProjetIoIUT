<?php
App::uses('Component', 'Controller');
/**
 * XML Component
 */
class XmlComponent extends Component{
    /**
    *@desc Cette fonction va vérifier que notre XML correspond bien a la DTD voulue
    *@param string XML_path le chemin du XML a vérifier
    *@param string $DTD_path le chemin de la DTD sur laquelle verifier
    *@return boolean true|false en fonction de la validation
    */
    public function XMLIsValide($typeXML, $XML_path, $DTD_path){
        $root = $typeXML;
        $old = new DOMDocument;
        // set_error_handler(function(){throw new Exception('fichier inexistant');});
        try{$old->load($XML_path);}catch(Exception $e){return false;}
        $creator = new DOMImplementation;
        $doctype = $creator->createDocumentType($root, null, $DTD_path);
        $new = $creator->createDocument(null, null, $doctype);
        $new->encoding = "utf-8";

        $oldNode = $old->getElementsByTagName($root)->item(0);
        //Cas où le fichier ne contient pas "infos" (donc pas valide)
        if($oldNode==null)
            return false;
        $newNode = $new->importNode($oldNode, true);

        $new->appendChild($newNode);
        return $new->validate();
    }

    /**
    *@desc Fonction permettant de lire l'xml jusqu'à l'element voulu
    *@param string $element le nom de la balise voulue
    *@return MyQCM_Manager $this l'instance en cours, pour permettre d'enchainer les fonctions
    */
    public function goToElement($element){
        if(!$this->isElementXML($element))
            while($this->xml->read() && !$this->isElementXML($element)){}
        return $this;
    }

    /**
    *@desc Fonction permettant de lire l'xml jusqu'à l'element fermant voulu
    *@param string $element le nom de la balise fermante voulue
    *@return MyQCM_Manager $this l'instance en cours, pour permettre d'enchainer les fonctions
    */
    private function goToEndElement($element){
        if(!$this->isEndElementXML($element))
            while($this->xml->read() && !$this->isEndElementXML($element)){}
        return $this;
    }

    /**
    *@desc Récupère le text contenu dans des balises
    *@return string $value la valeur contenue
    */
    private function insideText(){
        $this->xml->read();
        //echo $this->xml->value.'<br/>';
        return $this->xml->value;
    }

    /**
    *@desc Vérifie si le noeud actuel est un element XML du type $nom
    *@param string $nom le nom du noeud ouvrant voulu
    *@return bool true |false
    */
    private function isElementXML($nom){
        return ($this->xml->nodeType==XMLReader::ELEMENT && $this->xml->localName==$nom);
    }

    /**
    *@desc Vérifie si le noeud actuel est un element fermant XML du type $nom
    *@param string $nom le nom du noeud fermant voulu
    *@return bool true|false
    */
    private function isEndElementXML($nom){
        return ($this->xml->nodeType==XMLReader::END_ELEMENT && $this->xml->localName==$nom);
    }

    /**
    *@desc Recupère l'attribut du noeud actuel de nom $attName
    *@param string $attName le nom de l'attribut voulu
    *@return string $attribute
    */
    private function getAttribute($attName){
        //echo $this->xml->localName.':' . $this->xml->nodeType.'<br/>';
        return $this->xml->getAttribute($attName);
    }

    /**
    *@desc Fonction créant un XML à partir des infos obtenues
    *@param string $path le chemin de sorti du fichier XML
    */
    public function createXML($path='out.xml', $content){
        //$contenu = $this->toXML();
        $contenu = $content;

        //echo $contenu;
        echo 'Ecriture du fichier...<br/>';
        //On crée le chemin en fonction du type (attention à bien ajouter un s à cause du nom de dossier)
        $fichier=fopen($path, 'w');
        chmod($path, 0777);
        //On ecrit dedans le contenu créé au préalable
        fwrite($fichier, $contenu);
        //On le ferme
        fclose($fichier);
        chmod($path, 0777);
        echo 'Tout s\'est déroulé comme prévu. Bien joué capitaine !';
    }
}
 ?>