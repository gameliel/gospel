<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Image;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::latest()->paginate(6);
        return view('events.index', compact('events'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $request->validate([
            'title' => 'required|max:100',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048|mimes:jpeg,jpg,bmp,png,gif,svg'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'venue' => $request->venue,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $new_name,
        );
        Event::create($form_data,  $request->all());
        return view('events.index', ['data'=>$data])
            ->with('success', 'Events created succesfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Event::findOrFail($id);
        return view('events.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Event::findOrFail($id);
        return view('events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
          $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048'
          ]);

          $image_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('images'), $image_name);
        }else{
          $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required',
          ]);
        }

        $form_data = array(
          'title' => $request->title,
          'venue' => $request->venue,
          'date' => $request->date,
          'description' => $request->description,
          'image' => $image_name
        );

        Event::whereId($id)->update($form_data);

        return redirect('events.index')->with('success', 'Data is successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::findOrFail($id);
        $event->delete();

        return redirect('events.index')->with('success', 'Event is succesfully deleted');
    }
}
