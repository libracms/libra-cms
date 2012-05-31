<?php
/**
 * run demo code
 * Welcome to Doctrine 2.
 * 
 * This is the index file of the sandbox. The first section of this file
 * demonstrates the bootstrapping and configuration procedure of Doctrine 2.
 * Below that section you can place your test code and experiment.
 */

use Doctrine\ORM\EntityManager;

require_once 'cli-config.php';

## PUT YOUR TEST CODE BELOW

//$user = new User;
//$address = new Address;
//echo 'Hello World!' . PHP_EOL;
/*
$user = new \Entities\User;
$user->setName('Garfield');
$em->persist($user);
$em->flush();
echo "User saved!";
*/

// Create EntityManager
$em = EntityManager::create($connectionOptions, $config);

/*$q = $em->createQuery('select  u from LibraArticle\Entity\User u where u.name = ?1');
$q->setParameter(1, 'Garfield');
$garfield = $q->getResult();
var_dump($garfield);
*/

$articles = $em->getRepository('LibraArticle\Entity\Article');
$article = $articles->findOneBy(array('alias' => 'homepage'));
//$em->flush();
//$res = $articles->findAll();

$q = $em->createQuery('select  a from LibraArticle\Entity\Article a where a.alias = ?1');
$q->setParameter(1, 'faq');
$res = $q->getSingleResult();

//var_dump($res);
var_dump($article);

//echo "Hello " . $garfield[0]->getName() . "! count: " . count($garfield) . "\n";