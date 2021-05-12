<?php

namespace App\Http\Controllers;

use App\Models\Eventi;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    protected $_eventModel;

    public function __construct() {
        $this->_eventModel = new Eventi;
    }

public function showEventi() {

        //Categorie Top
        

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        // map estrae solo le categorie tra tutte le tuple
        $events = $this->_eventModel->getEvent();

        return view('home')
                        ->with('events', $events);
    }
}
