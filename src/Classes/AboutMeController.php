<?php

namespace Classes;

use Classes\Viewer;

class AboutMeController
{
    public static function action(): void
    {
        $data = [
            'title' => 'About Me',
            'name' => 'Карина Хайнацька',
            'description' => 'Я навчаюся  на 122 спеціальність.',
            'skills' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'SQL']
        ];

        Viewer::show('aboutme', $data);
    }
}

