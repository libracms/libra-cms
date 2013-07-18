<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminIndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'content' => 'Put your content here for <b>backend</b> ',
            'action' => __CLASS__ . '::index',
        ));
    }
}
