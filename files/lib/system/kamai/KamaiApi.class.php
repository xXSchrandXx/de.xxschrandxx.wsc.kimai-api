<?php

namespace wcf\system\kamai;

use Fiteco\KimaiClient\Configuration;
use Fiteco\KimaiClient\Api\ActivityApi;
use Fiteco\KimaiClient\Api\CustomerApi;
use Fiteco\KimaiClient\Api\DefaultApi;
use Fiteco\KimaiClient\Api\ProjectApi;
use Fiteco\KimaiClient\Api\TagApi;
use Fiteco\KimaiClient\Api\TeamApi;
use Fiteco\KimaiClient\Api\TimesheetApi;
use Fiteco\KimaiClient\Api\UserApi;
use GuzzleHttp\Client;

class KamaiApi {
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * 
     */
    public function __construct()
    {
        require_once(WCF_DIR . 'lib/system/api/php-kimai-api-client/autoload.php');

        // Load default config
        $this->config = Configuration::getDefaultConfiguration();

        // Configure host on which Kimai is running
        $this->config->setHost(KAMAI_URL);

        // Configure API key authorization: apiToken
        $this->config->setApiKey('X-AUTH-TOKEN', KAMAI_TOKEN);

        // Configure API key authorization: apiUser
        $this->config->setApiKey('X-AUTH-USER', KAMAI_USER);
    }

    /**
     * @var ActivityApi
     */
    protected $activityApi;

    /**
     * Gets Activity API
     * @return ActivityApi
     */
    public function getActivity()
    {
        if (!isset($this->activityApi)) {
            $this->activityApi = new ActivityApi(
                new Client(),
                $this->config
            );
        }
        return $this->activityApi;
    }

    /**
     * @var CustomerApi
     */
    protected $customerApi;

    /**
     * Gets Customer API
     * @return CustomerApi
     */
    public function getCustomerApi()
    {
        if (!isset($this->customerApi)) {
            $this->customerApi = new CustomerApi(
                new Client(),
                $this->config
            );
        }
        return $this->customerApi;
    }

    /**
     * @var DefaultApi
     */
    protected $defaultApi;

    /**
     * Gets Default API
     * @return DefaultApi
     */
    public function getDefaultApi()
    {
        if (!isset($this->defaultApi)) {
            $this->defaultApi = new DefaultApi(
                new Client(),
                $this->config
            );
        }
        return $this->defaultApi;
    }

    /**
     * @var ProjectApi
     */
    protected $projectApi;

    /**
     * Gets Project API
     * @return ProjectApi
     */
    public function getProjectApi()
    {
        if (!isset($this->projectApi)) {
            $this->projectApi = new ProjectApi(
                new Client(),
                $this->config
            );
        }
        return $this->projectApi;
    }

    /**
     * @var TagApi
     */
    protected $tagApi;

    /**
     * Gets Tag API
     * @return TagApi
     */
    public function getTagApi()
    {
        if (!isset($this->tagApi)) {
            $this->tagApi = new TagApi(
                new Client(),
                $this->config
            );
        }
        return $this->tagApi;
    }

    /**
     * @var TeamApi
     */
    protected $teamApi;

    /**
     * Gets Team API
     * @return TeamApi
     */
    public function getTeamApi()
    {
        if (!isset($this->teamApi)) {
            $this->teamApi = new TeamApi(
                new Client(),
                $this->config
            );
        }
        return $this->teamApi;
    }

    /**
     * @var TimesheetApi
     */
    protected $timesheetApi;

    /**
     * Gets Timesheet API
     * @return TimesheetApi
     */
    public function getTimesheetApi()
    {
        if (!isset($this->timesheetApi)) {
            $this->timesheetApi = new TimesheetApi(
                new Client(),
                $this->config
            );
        }
        return $this->timesheetApi;
    }

    /**
     * @var UserApi
     */
    protected $userApi;

    /**
     * Gets User API
     * @return UserApi
     */
    public function getUserApi()
    {
        if (!isset($this->userApi)) {
            $this->userApi = new UserApi(
                new Client(),
                $this->config
            );
        }
        return $this->userApi;
    }
}
