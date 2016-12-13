<?php

namespace Compco\FsTest\Views\Auth;

use Compco\FsTest\Views;

class Login extends Views\BaseView
{
    public function __construct()
    {
        $this->templateFile = 'auth/login.php';
    }

    public function render()
    {
        return parent::render();
    }
}