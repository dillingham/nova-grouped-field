<?php

namespace NovaGroupedField;

use Laravel\Nova\Fields\Field;

class Grouped extends Field
{
    public $seperator = ' / ';
    
    public $showLabels = false;
    
    public $removeLinks = false;
    
    public $component = 'nova-grouped-field';

    public $showOnCreation = false;
    
    public $showOnUpdate = false;

    public function resolveForDisplay($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);

        $this->fields->each->resolveForDisplay($resource);
        
        $this->withMeta([
            'fields' => $this->fields,
            'seperator' => $this->seperator,
            'showLabels' => $this->showLabels,
            'removeLinks' => $this->removeLinks,
        ]);
    }

    public function fields($fields)
    {
        $this->fields = collect($fields);

        return $this;
    }

    public function seperator($seperator)
    {
        $this->seperator = $seperator;

        return $this;
    }

    public function showLabels()
    {
        $this->showLabels = true;

        return $this;
    }

    public function removeLinks()
    {
        $this->removeLinks = true;

        return $this;
    }
}
