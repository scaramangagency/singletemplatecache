<?php

namespace Craft;

class SingleTemplateCacheService extends BaseApplicationComponent
{
  /**
   * Get all of the template caches
   * @return Array
   */
  public function getAll()
  {
      $cache = craft()->db->createCommand()
                  ->select('id, cacheKey, path')
                  ->from('templatecaches')
                  ->group('cacheKey')
                  ->queryAll();

      return $cache;
  }
}