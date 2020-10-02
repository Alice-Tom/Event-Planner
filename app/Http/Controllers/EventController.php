<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        $urls = $request->file('media') ?? [];

        try {
            $event = Event::create([
                'name' => $request->name,
                'slug' => $request->name,
                'password' => Hash::make($request->password),
                'type' => $request->type,
                'description' => $request->description,
                'token' => $request->description,
                'display_photo' => $request->display_photo,
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => $request->check
            ]);
            
    
            foreach ($clients as $client) {
                $event->clients()->create([
                    'name' => $client
                ]);
            }
    
            foreach ($urls as $url) {
                $type = 'video';
                $image_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                
                if (in_array($url->extension(), $image_extensions)) {
                   $type = 'photo';
                }
                $event->media()->create([
                    'type'=> $type, 
                    'url' => $url->store('public/events_images'),
                    'actual_name' => $url->getClientOriginalName() 
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
    public function show(Event $event)
    {
        return view('admin.event.show',compact('event'));
    }

    public function showEvent(Event $event)
    {
        return view('client.event',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
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
    public function update(Request $request, Event $event)
    {
    //    return $request;
        $clients = $request->clients;

        $urls = $request->file('media') ?? [];

        try {
            $event->update([
                'name' => $request->name,
                'slug' => $request->name,
                'password' => Hash::make($request->password),
                'type' => $request->type,
                'description' => $request->description,
                'display_photo' => $request->display_photo,
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => $request->check
            ]);

            $event->clients()->update([
                'event_id' => null
            ]);
            
            foreach ($clients as $client) {
                $event->clients()->updateOrCreate([
                    'name' => $client
                ]);
            }
    
            foreach ($urls as $url) {
                $type = 'video';
                $image_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                
                if (in_array($url->extension(), $image_extensions)) {
                   $type = 'photo';
                }
    
                $event->media()->updateOrCreate(
                    [
                        'type'=> $type, 
                        'actual_name' => $url->getClientOriginalName() 
                    ],
                    [
                        'url' => $url->store('public/events_images'),
                    ]
            );
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        
        return back()->with('Post Update', 'Successfully');

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
