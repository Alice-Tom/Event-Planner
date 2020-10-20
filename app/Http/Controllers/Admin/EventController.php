<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Throwable;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        if (Auth::guard('event')->check())
        {
            if (!($event->id == Auth::guard('event')->user()->id)) {
                abort(401);
            }
            return view('client.event', compact('event'));
        }
        return view('auth.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $events = Event::all();
        return view('admin.dashboard', compact('events'));
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
        $explodedName = explode(" ",$request->name);

        $slug = join("-", $explodedName);

        try {
            Event::create([
                'name' => ucwords($request->name),
                'slug' => $slug,
                'password' => Hash::make($request->password),
                'type' => $request->type,
                'description' => $request->description,
                'token' => $request->token,
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => isset($request->isCompleted) ? $request->isCompleted : false
            ]);

        } catch (\Throwable $th) {
            throw $th;
        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
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
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        try {
            $updated_events = [
                'name' => ucwords($request->name),
                'slug' => $request->name,
                'type' => $request->type,
                'description' => $request->description,
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => isset($request->isCompleted) ? true : false
            ];

            if ($request->password) {
                $updated_events['password'] = Hash::make($request->password);
            }

            $event->update($updated_events);

        } catch (\Throwable $th) {
            throw $th;
        }

        return back()->with('Post Update', 'Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->clearMediaCollection($event->token);
        $event->clearMediaCollection('dp-'.$event->token);
        $event->delete();
    }

    public function deleteSingle(Media $media)
    {
        $media->delete();

        return response()->json([
            'message' => 'deleted'
        ], 200);
    }

    public function deleteAll(Event $event)
    {
        $event->clearMediaCollection($event->token);
        $event->clearMediaCollection('dp-'.$event->token);

        return response()->json([
            'message' => 'All media have been deleted'
        ], 200);
    }
}
