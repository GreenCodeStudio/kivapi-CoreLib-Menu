<?php

namespace CoreLib\Menu\Components\Menu;

use Core\ComponentManager\ComponentController;

class Controller extends ComponentController
{
    public function __construct($params)
    {
        $this->params = $params;
    }

    public static function DefinedParameters()
    {
        return (object)[
            'items' => [
                'type' => 'tree',
                'item' => [
                    'type' => 'struct',
                    'items' => [
                        'title' => ['type' => 'string'],
                        'link' => ['type' => 'string']
                    ]
                ]
            ]
        ];
    }

    public function loadView()
    {
        include __DIR__.'/View.php';
    }

}