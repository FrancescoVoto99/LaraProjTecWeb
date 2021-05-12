<?php

namespace App\Models;


use App\Models\Resources\Event;

class Eventi {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getEvents($order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $prods = Event::all();
        if ($discounted != null) {
            $prods = $prods->whereNotNull('sconto');
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        return $prods->paginate(10);
    }

}
