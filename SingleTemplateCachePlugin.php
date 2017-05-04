<?php
namespace Craft;

class SingleTemplateCachePlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Delete Single Cache');
    }

    public function getVersion()
    {
        return '1.2.0';
    }

    public function getDeveloper()
    {
        return 'Joshua Martin';
    }

    public function getDeveloperUrl()
    {
        return 'thoughtfulweb.com';
    }

    public function hasCpSection()
    {
        return true;
    }

    public function init()
    {
        parent::init();
    }

}