<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControler extends Controller
{

    public function __invoke(Request $request)
    {
        dd('teste');
        return view('page.site.index');
    }


}
