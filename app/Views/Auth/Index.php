<?php

namespace Compco\FsTest\Views\Auth;

use Compco\FsTest\Views;

class Index extends Views\BaseView
{
    public function __construct()
    {
        $this->templateFile = 'auth/index.php';
    }

    public function render()
    {
        return parent::render();
    }
}