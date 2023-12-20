<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewMessage;
use App\Models\Message;
use App\Models\User;
use Session;

class ChatController extends Controller
{
    public function getmessages(Request $request)
    {
        $user_id=$request->user_id;
        $allSessionData = Session::all();
        $curr_user_id = $allSessionData['user_id'];
        $messages =new Message;
        $sent_messages = $messages->getSentMessages($user_id,$curr_user_id);
        $recived_messages =$messages->getRecivedMessages($user_id,$curr_user_id);
        return response()->json(['sent_messages' => $sent_messages,'recived_messages'=>$recived_messages]);
        // return view('chat.index', compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);
        $admin=User::where('role_id','1')->pluck('id')->first();
        $id=$request->id;
        $msg=$request->message;
        $allSessionData = Session::all();
        $user_id = $allSessionData['user_id'];
        $role_id = $allSessionData['role_id'];

        $message = new Message;
        $message->message=$msg;
        $message->sender_id=$user_id;
        if ($role_id=='0') {
            $message->reciver_id=$admin;
        } else {
            $message->reciver_id=$id;
        }
        $message->save();
        return response()->json(['message' => 'Message Sent successfully']);      

        // $user = auth()->user();

        // $message = Message::create([
        //     'user_id' => $user_id,
        //     'message' => $request->input('message'),
        // ]);

        // if ($user->role_id == 1) {
        //     broadcast(new NewMessage($message));
        // }

        // return redirect('/chat');
    }
}
