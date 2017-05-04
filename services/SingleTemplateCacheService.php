<?php

namespace Craft;

class SingleTemplateCacheService extends BaseApplicationComponent
{
  /**
   * Get all of the template caches
   * @return Array
   */
  public function getAll($countOnly = false)
  {
    $query = craft()->db->createCommand();

    if ($countOnly)
    {
      $query->select('id')
            ->from('templatecaches');
    }
    else
    {
      $query->select('id, cacheKey, path, body, locale, expiryDate')
            ->from('templatecaches')
            ->limit(100)
            ->order('cacheKey');
    }

    return $query->queryAll();
  }
}