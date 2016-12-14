<?php

namespace Compco\FsTest\Views\User;

use Compco\FsTest\Views;

class Profile extends Views\BaseView
{
    public function __construct()
    {
        $this->templateFile = 'user/profile.php';
    }

    public function render()
    {
        return parent::render();
    }
}