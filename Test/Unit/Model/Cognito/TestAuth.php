<?php
/**
 * Anan Customer, Magento 2.4 custom customer supported aws cognito
 * php version 8.1
 * 
 * @category Admin Customer
 * @package  Aws Cognito
 * @author   Anan Fauzi <mr.ananfauzi@gmail.com>
 * @license  MIT license <https://opensource.org/licenses/MIT>
 * @link     https://github.com/ananfauzi
 */
namespace Anan\Customer\Test\Unit\Model\Cognito;

class TestAuth extends \PHPUnit\Framework\TestCase
{
    /**
     * Set up params
     */
    protected function setUp() {
        $this->username = '';
        $this->password = '';
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->model = $this->objectManager->getObject("\Anan\Customer\Model\Cognito\Auth");
    }

    /**
     * Test function login
     */
    public function testLogin()
    {
        $result = $this->model->login($this->username, $this->password);
        $this->assertTrue(\is_bool($result));
    }

    /**
     * Test function register
     */
    public function testCreate()
    {
        $result = $this->model->create($this->username, $this->password);
        $this->assertTrue(\is_bool($result));
    }
}