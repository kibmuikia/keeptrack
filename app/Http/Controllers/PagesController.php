<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function about()
    {
      $contacts = [
    'Muikia Allan',
    'Thor Ragnarok',
    'Might Alexa',
    'Pen Sensei'
  ];
    return view('about')->withContacts($contacts)->withText('Texty direct');
    }
}
