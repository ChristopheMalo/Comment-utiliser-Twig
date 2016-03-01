<?php
/**
 * Comment utiliser Twig
 * =========================================================================================================
 *
 * Contrôleur frontal / Page d'accueil
 * 
 * @author          Christophe Malo
 * @started         01/03/2016
 * @updated         
 * @project         Comment utiliser Twig
 * @namefile        index.php
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

echo $twigTpl->render('index.twig', array(
    'nom_du_moteur_template'    => 'Twig from SensioLabs',
    'myVariable'                => 5,
    //'variable3'                  => 'Toto'
    'testDivisible'             => 10,
    'testEmpty'                 => '',
));