<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    

    public function getAllClients()
    {
        $clients = Client::all();
        return View('client.list',compact('clients'));
    }

}
