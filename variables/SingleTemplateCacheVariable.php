<?php

namespace Craft;

class SingleTemplateCacheVariable
{
	public function getAll()
	{
		return craft()->singleTemplateCache->getAll();
	}
}