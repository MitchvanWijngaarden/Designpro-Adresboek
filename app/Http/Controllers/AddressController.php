<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Auth;
use App\Address;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller {
    public $restful = true;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return View::make('addressbook')
            ->with('addresses', $this->get_all_addresses());
    }

    public function get_new() {
        return View::make('new_address');
    }

    public function post_new(Request $request) {
        $user_id = Auth::id();

        $requestTest = $request;

        $validation = Address::validate($requestTest->all());

        if (!$validation->fails()) {
            Address::create(array(
                'name'=>$requestTest->input('name'),
                'address'=>$requestTest->input('address'),
                'user_id'=>$user_id
            ));
            return Redirect::to('address');
        }

        return Redirect::back()->withErrors($validation)->withInput();
    }

    public function get_all_addresses() {
        $user_id = Auth::id();
        return Address::where('user_id', $user_id)->get();
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