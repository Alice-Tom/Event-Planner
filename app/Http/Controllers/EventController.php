<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Event;
use App\Models\Media;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // check is the user is authenticated
    public function index(Event $event)
    {
         // only the authorised user
        if (Auth::guard('event')->check())
        {
            if (!($event->id == Auth::guard('event')->user()->id)) {
                abort(401);
            }
            return view('client.event', compact('event'));
        }
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
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
        $clients = $request->clients;

        $urls = $request->file('media') ?? [];

        $name = $request->name;

        $explodedName = explode(" ",$name);

        $slug = join("-", $explodedName);

        try {
            $event = Event::create([
                'name' => ucwords($name),
                'slug' => $slug,
                'password' => Hash::make($request->password),
                'type' => $request->type,
                'description' => $request->description,
                'token' => Str::uuid(),
                'display_photo' => $request->file('display_photo')[0]->store('public/events_images'),
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => isset($request->isCompleted) ? $request->isCompleted : false
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
        $clients = $request->clients;

        $media = $request->file('media') ?? [];


        $old_media = $request->file('old_media') ?? [];

        $display_photo = $request->file('display_photo')[0] ?? [];

        $urls = array_diff($old_media, $media);

        try {
            $updated_events = [
                'name' => ucwords($request->name),
                'slug' => $request->name,
                'type' => $request->type,
                'description' => $request->description,
                // 'display_photo' => $display_photo->store('public/events_images'),
                'date' => $request->date,
                'expiry_date' => $request->expiry_date,
                'isCompleted' => isset($request->isCompleted) ? true : false
            ];

            if ($request->password) {
                $updated_events['password'] = Hash::make($request->password);
            }

            $event->update($updated_events);

            Client::destroy($request->client_id);

            //    update the clients
            foreach ($clients as $client) {

                $event->clients()->create([
                    'name' => ucwords($client),
                ]);
            }



            // foreach ($urls as $url) {
            //     $type = 'video';
            //     $image_extensions = ['jpg', 'jpeg', 'png', 'gif'];

            //     if (in_array($url->extension(), $image_extensions)) {
            //        $type = 'photo';
            //     }

            //     $event->media()->updateOrCreate(
            //         [
            //             'type'=> $type,
            //             'actual_name' => $url->getClientOriginalName()
            //         ],
            //         [
            //             'url' => $url->store('public/events_images'),
            //         ]
            // );
            // }
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


