<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use Illuminate\Routing\Controller;

>>>>>>> origin/master
/**
 * Class AngularController
 *
 * @package App\Http\Controllers
 */
class AngularController extends Controller
{
<<<<<<< HEAD
    /**
     * @return \Illuminate\View\View
     */
=======
>>>>>>> origin/master
    public function serveApp()
    {
        return view('index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function unsupported()
    {
        return view('unsupported_browser');
    }
}
