<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use mysqli;

class EventController extends Controller
{
    public function index() {

        return view('welcome');
    } /*Retorna para a página de inicial*/

    public function events() {

        $events = Event::all();

        return view('events', ['events' => $events]);
    } /*Retorna para a página dos compromissos cadastrados*/

    public function create() {
        return view('events.create');
    } /*Retorna para a página de cadastro dos compromissos*/

    public function store(Request $request) {
        
        $events = Event::all();
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->local = $request->local;
        $event->status = $request->status;
        $event->comments = $request->comments;
        $event->time1 = $request->time1;
        $event->time2 = $request->time2;

        // Image Upload
        if($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        if($event->image == ""):
            $event->image = "";
        endif;

        if($event->comments == ""):
            $event->comments = "";
        endif;

        $event->save();

        return redirect('/')->with('msg', 
        'Compromisso criado com sucesso!');

        
    }
    
    /*Passa os dados de cadastro para o banco de dados*/

    public function destroy($id) {

        Event::findOrfail($id)->delete();

        return redirect('/events/all')->with('msg', 'Evento excluído com sucesso!');

    } /*Função para deletar o compromisso cadastrado*/

    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    } /*Função para editar o compromisso cadastrado*/

    public function update(Request $request) {

        $data = $request->all();

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;

        }

        if(empty($data['comments'])) {
            $data['comments'] = "";
        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/events/all')->with('msg', 'Evento editado com sucesso!');

    } /*Função para atualizar com novos dados o compromisso editado*/

    public function filters() {

        $events = Event::all();

        return view('events.filters', ['events' => $events]);

    } /*Retorna para a página de inicial*/

}