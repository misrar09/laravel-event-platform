<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $results = Event::with('user', 'tags')->get();


        $data = [
            'success' => true,
            'results' => $results,
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $event = Event::with("user")->find($id);

        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        return response()->json(['success' => true, 'results' => $event]);
    }



    public function tag()
    {
        $results = Tag::all();
        $data = [
            'success' => true,
            'results' => $results,
        ];
        return response()->json($data);
    }
}
