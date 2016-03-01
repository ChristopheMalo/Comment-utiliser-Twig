<?php

/**
 * Comment utiliser Twig
 * =========================================================================================================
 *
 * Fichier de configuration pour l'utilisation de Twig
 * 
 * @author      Christophe Malo
 * @date        01/03/2016
 * @version     1.0.0
 * @copyright   2016 by the author
 * @license     no license - free to use - just link to my github - Thanks :)
 * @mygithub    https://github.com/ChristopheMalo  
 */

require_once __DIR__  . '/../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../views');
$twigTpl = new Twig_Environment($loader, array(
    'cache' => false
));