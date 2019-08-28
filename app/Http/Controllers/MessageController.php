<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {

        $msg = new Message();

        for($idx = 0; $idx < 25; $idx++ ){

            $rand = str_random(4);
            $msg->sendMessage($rand);

            echo "Send message = ".$rand."<br/>";
        }

    }


    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show(Message $message)
    {

    }


    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy(Message $message)
    {
        //
    }
}
