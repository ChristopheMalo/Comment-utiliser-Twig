<?php
/**
 * Comment utiliser Twig
 * =========================================================================================================
 *
 * Page de test pour la fonction héritage de Twig
 * 
 * @author          Christophe Malo
 * @started         01/03/2016
 * @updated         
 * @project         Comment utiliser Twig
 * @namefile        heritage.php
 * @fileversion     1.0.1
 * @phpversion      5.6.10
 * @htmlversion     HTML5
 * @cssversion      CSS3
 * @jqueryversion
 * @copyright       2016 by the author
 * @license         no license - free to use - just link to my github - Thanks :)
 * @mygithub        https://github.com/ChristopheMalo 
 */
require_once __DIR__ . '/../app/config/config.php';

//$template = $twigTpl->loadTemplate('index.twig');
//echo $template->render(array(
//    'nom_du_moteur_template' => 'Twig from SensioLabs'
//));

// Ou plus simple

echo $twigTpl->render('heritageChildren.twig');