<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.testimonials.index')->only('index');
        $this->middleware('can:admin.testimonials.create')->only('create','store');
        $this->middleware('can:admin.testimonials.edit')->only('edit','update');
        $this->middleware('can:admin.testimonials.destroy')->only('destroy');
    }
  
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

  
    public function store(TestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('public/testimonials', $request->file('file'));
            $testimonial->image()->create([
                'url' => $url
            ]);
        }

        Cache::flush();
        return redirect()->route('admin.testimonials.edit',$testimonial)->with('info','El testimonio se creó con éxito');
    }

   
    public function edit(Testimonial $testimonial){
        $this->authorize('author',$testimonial);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

 
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $this->authorize('author',$testimonial);
        $testimonial->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/testimonials', $request->file('file'));
            if ($testimonial->image) {
                Storage::delete($testimonial->image->url);
                $testimonial->image->update([
                    'url' => $url
                ]);
            }else{
                $testimonial->image()->create([
                    'url' => $url
                ]);
            }
        }
        
        Cache::flush();
        return redirect()->route('admin.testimonials.edit',$testimonial)->with('info','El testimonio se actualizó con éxito');
    }

   
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('author',$post);
        $testimonial->delete();
        Cache::flush();
        return redirect()->route('admin.testimonials.index')->with('info','El testimonio se eliminó con éxito');
    }
}
