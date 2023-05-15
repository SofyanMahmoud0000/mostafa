<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Reason;
use App\Models\Driver;

class ProviderController extends Controller
{
    /**
    * @group Provider
    * @authenticated
    */
    public function listTickets(){
        $tickets = Ticket::where('provider_id', auth('provider')->user()->id)->get();
        foreach($tickets as $ticket) {
            $reason = Reason::find($ticket->reason_id);
            $ticket["reason"] = $reason->description;
            $ticket["price"] = $reason->price;
        }
        return response()->json([
            'ticketds' => $tickets
        ],200);
    }

    /**
    * @group Provider
    * @authenticated
    */
    public function listDrivers(){
        $drivers = Driver::all();
        return response()->json([
            'drivers' => $drivers
        ],200);
    }


    /**
    * @group Provider
    * @authenticated
    * @queryParam driver_id required
    * @queryParam workshop_id required
    * @queryParam reason_id required
    */
    public function createTicket(Request $request){
        $request['provider_id'] = auth('provider')->user()->id;
        $ticket = Ticket::create($request->all());
        return response()->json([
            'ticket' => $ticket
        ],200);
    }

    /**
    * @group Provider
    * @authenticated
    * @urlParam id required	
    */
    public function removeTicket($id) {
        $ticket = Ticket::find($id)->delete();
        return response()->json([
            'message' => "ticket has been deleted successfully"
        ],200);
    }


    /**
    * @group Provider
    * @authenticated
    */
    public function listReasons() {
        $reasons = Reason::all();
        return response()->json([
            'reasons' => $reasons
        ],200);
    }
}
