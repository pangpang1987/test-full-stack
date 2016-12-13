<?php

namespace Compco\FsTest\Views\Auth;

use Compco\FsTest\Views;

class NotFound extends Views\BaseView
{
    public function __construct()
    {
        $this->templateFile = 'auth/404.php';
    }

    public function render()
    {
        return parent::render();
    }
}