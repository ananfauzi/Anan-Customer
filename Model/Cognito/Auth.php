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
namespace Anan\Customer\Model\Cognito;

use Magento\Framework\Exception\LocalizedException;
use Anan\AwsCognito\Model\Client;

class Auth
{
    /**
     * @var \Anan\AwsCognito\Model\Client
     */
    protected $client;

    /**
     * Constructor
     * @param \Anan\AwsCognito\Model\Client $client
     */
    public function __construct(
        Client $client
    ){
        $this->client = $client;
    }

    /**
     * Login to cognito system
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login(string $username, string $password): bool
    {
        try {
            $result = $this->client->authenticate($username, $password);
        } catch (LocalizedException $e) {
            return false;
        }

        return true;
    }

    /**
     * Create new admin backend user
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function create(string $username, string $password, array $attributes = []): bool
    {
        try {
            $result = $this->client->register($username, $password, $attributes);
        } catch (LocalizedException $e) {
            return false;
        }

        return $result;
    }
}