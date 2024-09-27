<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Retrieve all sliders
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }
    public function clientIndex()
{
    // Retrieve all sliders
    $sliders = Slider::all();
    return view('client.slider', compact('sliders'));
}


    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/sliders'), $imageName);

        Slider::create([
            'image' => $imageName,
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
