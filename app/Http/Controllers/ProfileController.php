<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    ////
    public function select(request $request)
    {
        $profiles = Profile::find($request->id)->get();

        return response(array(
            $profiles
        ), '200');
    }

    public function insert(request $request)
    {
        $profile = new Profile;

        $profile->title = $request->title;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->age = $request->age;
        $profile->height = $request->height;
        $profile->tall = $request->tall;
        $profile->address = $request->address;

        $profile->save();

        return response(array(
            'Status' => 'Success'
        ), '200');
    }

    public function update(request $request)
    {
        $profile = Profile::find($request->id);

        $profile->title = $request->title;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->age = $request->age;
        $profile->height = $request->height;
        $profile->tall = $request->tall;
        $profile->address = $request->address;

        $profile->save();

        return response(array(
            'Status' => 'Success'
        ), '200');
    }

    public function delete(request $request)
    {
        $profile = Profile::find($request->id);
        $profile->delete();

        return response(array(
            'Status' => 'Success'
        ), '200');
    }
}
