<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Reason;
use App\Models\Driver;
use App\Models\Provider;

class WorkshopController extends Controller
{
    /**
    * @group Workshop
    * @authenticated
    */
    public function listTickets(){
        $tickets = Ticket::where('workshop_id', auth()->user()->id)->get();
        foreach($tickets as $ticket) {
            $reason = Reason::find($ticket->reason_id);
            $ticket["reason"] = $reason->description;
            $ticket["price"] = $reason->price;
            $ticket["driver"] = Driver::find($ticket->driver_id)->name;
            $ticket["provider"] = Provider::find($ticket->provider_id)->name;
        }
        return response()->json([
            'tickets' => $tickets
        ],200);
    }

    /**
    * @group Workshop
    * @authenticated
    * @urlParam id required	
    */
    public function resolve($id){
        $ticket = Ticket::find($id);
        $ticket->update(["resolved" => true]);

        return response()->json([
            'message' => "The ticket has been resolved successfully"
        ],200);
    }
}
