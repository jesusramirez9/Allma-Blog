<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;


class TestimonialObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function creating(Testimonial $testimonial)
    {
        if (! \App::runningInConsole()) {
            $testimonial->user_id = auth()->user()->id;
        }
       
    }

    public function deleting(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::delete($testimonial->image->url);
        }
    }

}
