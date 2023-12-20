<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    public function getInquaryDetails()
    {
        $inquiry_details = Inquiry::join('users','inquiries.user_id','=','users.id')
                            ->join('responses','inquiries.preferred_response_id','=','responses.id')
                            ->get();
                            
        return $inquiry_details;
    }
}
