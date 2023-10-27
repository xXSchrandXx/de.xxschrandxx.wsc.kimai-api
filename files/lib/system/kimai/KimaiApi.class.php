<?php

namespace wcf\system\kimai;

use Swagger\Client\Api\ActionsApi;
use Swagger\Client\Api\ActivityApi;
use Swagger\Client\Api\CustomerApi;
use Swagger\Client\Api\DefaultApi;
use Swagger\Client\Api\ExpenseApi;
use Swagger\Client\Api\ProjectApi;
use Swagger\Client\Api\TagApi;
use Swagger\Client\Api\TaskApi;
use Swagger\Client\Api\TeamApi;
use Swagger\Client\Api\TimesheetApi;
use Swagger\Client\Api\UserApi;
use \Swagger\Client\Configuration;
use wcf\system\io\HttpFactory;

class KimaiApi {
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var ClientInterface
     */
    protected $client;

    public function __construct()
    {
        require_once(WCF_DIR . 'lib/system/api/kimai-api-php/autoload.php');

        // Load default config
        $this->config = Configuration::getDefaultConfiguration();

        // set debug
        if (ENABLE_DEBUG_MODE) {
            $this->config->setDebug(true);
        }

        // Configure API key authorization: apiToken
        $this->config->setApiKey('X-AUTH-TOKEN', KIMAI_TOKEN);

        // Configure API key authorization: apiUser
        $this->config->setApiKey('X-AUTH-USER', KIMAI_USER);

        // Configure host on which Kimai is running
        $this->config->setHost(KIMAI_URL);
        $this->client = HttpFactory::makeClient([
            'base_uri' => KIMAI_URL
        ]);
    }

    /**
     * @var ActionsApi
     */
    protected $actionsApi;

    public function getActionsApi()
    {
        if (!isset($this->actionsApi)) {
            $this->actionsApi = new ActionsApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->actionsApi;
    }

    /**
     * @var ActivityApi
     */
    protected $activityApi;

    public function getActivityApi()
    {
        if (!isset($this->activityApi)) {
            $this->activityApi = new ActivityApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->activityApi;
    }

    /**
     * @var CustomerApi
     */
    protected $customerApi;

    public function getCustomerApi()
    {
        if (!isset($this->customerApi)) {
            $this->customerApi = new CustomerApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->customerApi;
    }

    /**
     * @var DefaultApi
     */
    protected $defaultApi;

    public function getDefaultApi()
    {
        if (!isset($this->defaultApi)) {
            $this->defaultApi = new DefaultApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->defaultApi;
    }

    /**
     * @var ExpenseApi
     */
    protected $expenseApi;

    public function getExpenseApi()
    {
        if (!isset($this->expenseApi)) {
            $this->expenseApi = new ExpenseApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->expenseApi;
    }

    /**
     * @var ProjectApi
     */
    protected $projectApi;

    public function getProjectApi()
    {
        if (!isset($this->projectApi)) {
            $this->projectApi = new ProjectApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->projectApi;
    }

    /**
     * @var TagApi
     */
    protected $tagApi;

    public function getTagApi()
    {
        if (!isset($this->tagApi)) {
            $this->tagApi = new TagApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->tagApi;
    }

    /**
     * @var TaskApi
     */
    protected $taskApi;

    public function getTaskApi()
    {
        if (!isset($this->taskApi)) {
            $this->taskApi = new TaskApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->taskApi;
    }

    /**
     * @var TeamApi
     */
    protected $teamApi;

    public function getTeamApi()
    {
        if (!isset($this->teamApi)) {
            $this->teamApi = new TeamApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->teamApi;
    }

    /**
     * @var TimesheetApi
     */
    protected $timesheetApi;

    public function getTimesheetApi()
    {
        if (!isset($this->timesheetApi)) {
            $this->timesheetApi = new TimesheetApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->timesheetApi;
    }

    /**
     * @var UserApi
     */
    protected $userApi;

    public function getUserApi()
    {
        if (!isset($this->userApi)) {
            $this->userApi = new UserApi(
                HttpFactory::getDefaultClient(),
                $this->config
            );
        }
        return $this->userApi;
    }
}
