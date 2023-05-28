<?php

namespace Nemrutco\NovaGlobalFilter;

use Laravel\Nova\Card;

class NovaGlobalFilter extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    protected $filters;

    public $inline = false;

    public $resettable = false;

    public $title = '';

    public $width = '5/6';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-global-filter';
    }


    public function __construct($filters = [])
    {
        $this->filters = $filters;
    }

    public function jsonSerialize() :array
    {
        return array_merge(parent::jsonSerialize(), [
            'filters' => collect($this->filters ?? [])->map(function ($filter) {
                return $filter->jsonSerialize();
            })->values()->all(),
            'inline' => $this->inline,
            'resettable' => $this->resettable,
            'title' => $this->title,
        ]);
    }

    public function inline()
    {
        $this->inline = true;
        return $this;
    }

    public function resettable()
    {
        $this->resettable = true;
        return $this;
    }

    public function title($title)
    {
        $this->title = $title;
        return $this;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> f7d11cd65d4c1c4d5785f65ab5e5756acc5c4017
