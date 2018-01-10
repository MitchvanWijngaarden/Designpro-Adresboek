<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Address;

class AddressController extends Controller {
    public $restful = true;

    public function get_index() {
        $view = View::make('addressbook.index')
            ->with('addresses', Address::orderBy('name')->get());
        return $view;
    }

    public function get_edit_address($id) {
        $view = View::make('addressbook.edit_view')
            ->with('address', Address::find($id));
        return $view;
    }
}