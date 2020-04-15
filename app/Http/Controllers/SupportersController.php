<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supporter;

class SupportersController extends Controller
{
    public function index() {
        $supporters = \App\Supporter::orderByDesc('id')->get();
        return view('supporters', ['supporters' => $supporters]);
    }


    public function insert(Request $request) {
        $supporter = new Supporter;
        $supporter->surname = $request->input('surname');
        $supporter->firstname = $request->input('firstname');
        $supporter->pseudo = $request->input('pseudo');
        $supporter->email = $request->input('email');

        $supporter->save();
        return view('confirmation');
    }

    public function edit($id){
      $supporters = \App\Supporter::where('id', $id);
      return view('edit', ['supporters' => $supporters]);
    }

    public function update(Request $request, $id) {
        $supporters = \App\Supporter::find($id);
        dd($supporters);
        $supporters->surname = $request->input('surname');
        $supporters->firstname = $request->input('firstname');
        $supporters->pseudo = $request->input('pseudo');
        $supporters->email = $request->input('email');
        $supporters->save();
        return view('confirmation');
    }

    public function delete($id) {
        $supporter = \App\Supporter::find($id);
        $supporter->delete();
        return view('confirmation');
    }
}
