<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'content' => 'Put your content here',
            'action' => __NAMESPACE__ . '\\index',
        ));
    }
}
