<?php

namespace Craft;

class SingleTemplateCacheVariable
{
	public function getAll()
	{
		return craft()->singleTemplateCache->getAll(false);
	}

  public function count()
  {
    return craft()->singleTemplateCache->getAll(true);
  }
}