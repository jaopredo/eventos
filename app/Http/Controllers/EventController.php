<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index() {
        $search = request('search');

        $logged_user = null;

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $events = Event::all();
        }

        return view('events', ['events' => $events, 'search' => $search]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $event = new Event();

        $event->title = $request->title;
        $event->eventday = $request->eventdate;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->items = $request->items;

        // Mudando se o evento é privado ou não
        if ($event->private == 'ON') {
            $event->private = 1;
        } else {
            $event->private = 0;
        }


        // Salvando a IMAGEM
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalname() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('images/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com Sucesso!');
    }

    public function search ($id) {
        $event = Event::findOrFail($id);

        return view('show_event', ['event' => $event]);
    }

    public function dashboard () {
        $user = auth()->user();

        $events = $user->events;

        return view('dashboard', ['events'=>$events, 'user'=>$user]);
    }

    public function destroy($id) {
        Event::findOrFail($id)->delete();

        return redirect('dashboard')->with('msg', 'Evento excluído com sucesso!');
    }
}
