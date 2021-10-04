<?php

namespace App\Policies;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Testimonial $testimonial)
    {
        if ($user->id == $testimonial->user_id) {
            return true;
        }
        else{
            return false;
        }
    }

    public function published(?User $user, Testimonial $testimonial){
        if ($testimonial->status == 2) {
            return true;
        } else {
            return false;
        }
        
    }
}
