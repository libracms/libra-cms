<?php

namespace LibraCmsTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * Description of IndexController
 *
 * @author duke
 */
class IndexControllerTest extends AbstractHttpControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $this->setApplicationConfig(
            include 'config/application.config.php'
        );
        parent::setUp();
    }

    public function _testIndexActionCanBeAccessed()
    {
        $this->dispatch('/application');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('application');
    }

    public function testAdminActionCanNotBeAccessed()
    {
        $this->dispatch('/admin/');
        $this->assertResponseStatusCode(302);
    }
}
