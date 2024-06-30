<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::orderby('last_name')->orderBy('first_name')->get();

        return response()->json($clients);
    }

    public function view(Client $client) {
        $client->load('accounts');
        return response()->json($client);
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        $client = Client::create($fields);

        return response()->json([
            'status' => 'OK',
            'clients' => $client,
            'message' => 'A new client record has been created with an ID# of ' . $client->id
        ]);
    }

    public function destroy(Client $client) {
        $details = $client->last_name . "," . $client->first_name;
        $client->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "na delete na ang client $details gaw."
        ]);
    }
}
