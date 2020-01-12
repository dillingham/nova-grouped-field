<?php

namespace Dillingham\NovaGroupedField;

use Laravel\Nova\Fields\Field;

class Grouped extends Field
{
    public $separator = ' / ';

    public $showLabels = false;

    public $removeLinks = false;

    public $component = 'nova-grouped-field';

    public $showOnCreation = false;

    public $showOnUpdate = false;

    public function __construct($name)
    {
        $this->name = $name;

        $this->exceptOnForms();
    }

    public function resolveForDisplay($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);

        $this->fields->each->resolve($resource);

        $this->withMeta([
            'fields'      => $this->fields,
            'separator'   => $this->separator,
            'showLabels'  => $this->showLabels,
            'removeLinks' => $this->removeLinks,
        ]);
    }

    public function fields($fields)
    {
        $this->fields = collect($fields);

        return $this;
    }

    public function separator($separator)
    {
        $this->separator = $separator;

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
