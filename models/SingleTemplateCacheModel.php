<?php

namespace Craft;

class SingleTemplateCacheModel extends BaseModel
{
    protected function defineAttributes()
    {
        return array(
          'id' => AttributeType::Number,
          'cacheKey' => array(AttributeType::String, 'required' => true),
          'path' => array(AttributeType::String, 'required' => true)
        );
    }
}