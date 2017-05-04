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
        return 'Thoughtful Web Limited';
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