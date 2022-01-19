<?php


namespace Autopilot\AP3Connector\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = "autopilot_configuration/general/enabled";
    const XML_PATH_API_KEY = "autopilot_configuration/general/apikey";
    const XML_PATH_LOG_ENABLED = "autopilot_configuration/general/logs";

    private ScopeConfigInterface $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }

    public function isLogEnabled()
    {
        return $this->config->getValue(self::XML_PATH_LOG_ENABLED);
    }

    public function apiKey()
    {
        return $this->config->getValue(self::XML_PATH_API_KEY);
    }
}
