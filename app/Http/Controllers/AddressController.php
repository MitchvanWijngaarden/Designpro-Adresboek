<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Address;

class AddressController extends Controller {
    public $restful = true;

    public function get_all_addresses() {
        return Address::all();
    }

    public function get_single_address_by_id($id) {
        return Address::find($id);
    }

    public function store(Request $request) {
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    public function update(Request $request, Address $address_to_update) {
        $address_to_update->update($request->all());
        $updated_address = $address_to_update;

        return response()->json($updated_address, 200);
    }

    public function delete(Article $article_to_delete) {
        $article_to_delete->delete();

        return response()->json(null, 204);
    }
}