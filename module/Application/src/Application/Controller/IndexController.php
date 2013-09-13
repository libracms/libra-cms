<?php
/**
 * Libra-CMS (http://www.ejoom.com/libra-cms/)
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function userlandAction()
    {
        return new ViewModel(array(
            'content' => 'Put your content here.',
            'action' => __CLASS__ . '::userland',
        ));
    }

    public function twigAction()
    {
        return new ViewModel(array(
            'content' => 'Put your content here',
            'action' => __CLASS__ . '::tiwg',
        ));
    }
}
