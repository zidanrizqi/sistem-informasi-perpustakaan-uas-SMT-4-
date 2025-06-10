<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Admin',
            'page'  => 'v_admin',
        ];
        return view('v_template_admin', $data);
    }
}