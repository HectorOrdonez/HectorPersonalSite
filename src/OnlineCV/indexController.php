<?php namespace Src\OnlineCV;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class IndexController extends Controller {

    public function showWelcome()
    {
        return View::make('onlineCV.index');
    }

}
