<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    //
    public function select()
    {
        $tests = Test::find(1);

        foreach($tests as $test)
        {
            echo $test["name"];
        }
    }

    public function insert()
    {
        $test = new Test;

        $test->name = "Nut Chantathab";

        $test->save();
    }

    public function update()
    {
        $test = Test::find(1);

        $test->name = "Nut Chantathab2";

        $test->save();
    }

    public function delete()
    {
        $test = Test::find(1);
        $test->delete();
    }
}
