<?php


namespace Geffest\Quotes\Controllers;


use Illuminate\Routing\Controller;

class RandomQuoteController extends Controller
{

    public function index()
    {
        return view('quotes::random');
    }

}
