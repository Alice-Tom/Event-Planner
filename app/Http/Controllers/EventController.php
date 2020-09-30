<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Media;
use App\Models\Client;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.event');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        return view('admin.event');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = $request->clients;

        $urls = $request->file('media');

        try {
            $event = Event::create([
                'name' => $request->name,
                'slug' => $request->name,
                'password' => $request->password,
                'type' => $request->type,
                'description' => $request->description,
                'token' => $request->description,
                'display_photo' => $request->display_photo,
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => true
            ]);
            
    
            foreach ($clients as $client) {
                $event->clients()->create([
                    'name' => $client
                ]);
            }
    
            foreach ($urls as $url) {
                $event->media()->create([
                    'type'=> "photo", 
                    'url' => $url->store('public/events_images')
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }


        return back()->with('post_created','succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.event.dashboard',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
