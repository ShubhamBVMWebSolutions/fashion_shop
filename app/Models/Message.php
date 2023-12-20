<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // app/Models/User.php

        
    public function getSentMessages($user_id,$curr_user_id)
    {
        $sent_messages= Message::where('sender_id', $curr_user_id)
                        ->where('reciver_id',$user_id)
                        ->get();

        return $sent_messages;
    }

    public function getRecivedMessages($user_id,$curr_user_id)
    {
        $recived_messages= Message::where('sender_id', $user_id)
                        ->where('reciver_id',$curr_user_id)
                        ->get();
        return $recived_messages;        
    }
}
