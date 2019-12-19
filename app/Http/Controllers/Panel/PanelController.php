<?php

namespace App\Http\Controllers\Panel;



class PanelController
{
    public function index()
    {
        return view('panel.index');
    }

    public function config()
    {
        return view('panel.config');
    }

}
