<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Eventi;


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
        $events = $this->_eventModel->getEvents();

        return view('home')
                        ->with('events', $events);
    }
    public function showEvento($id_event) {

        $events = $this->_eventModel->getEvents();
        $event = $events->where('id', $id_event)->first();
        

        return view('evento')
                        ->with('event', $event);
    }
   
}
