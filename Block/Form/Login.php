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
namespace Anan\Customer\Block\Form;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\Session;
use Magento\Customer\Model\Url;

class Login extends \Magento\Customer\Block\Form\Login
{
    /**
     * @var int
     */
    private $_username = -1;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $urlBuilder;

    /**
     * Customer
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Customer\Model\Url $customerUrl
     * @param  \Magento\Framework\UrlInterface $urlBuilder
     * @param array $data
     */
    public function __construct(
        Context $context,
        Session $customerSession,
        Url $customerUrl,
        UrlInterface  $urlBuilder,
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $customerSession,  $customerUrl, $data);
    }

    /**
     * Retrieve form posting url
     * @return string
     */
    public function getPostActionUrl()
    {
        return $this->urlBuilder->getUrl('anancustomer/account/loginpost');
    }
}