<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    private $array = ['error'=>'', 'result'=>[]];

    public function all() {
        $notes = Note::all();
        foreach($notes as $note) {
            $this->array['result'][] = [
                'id'=>$note->id,
                'title'=>$note->title
            ];
        }
        

        return $this->array;
    }

    public function one($id) {
        $note = Note::find($id);
        if($note) {

            $this->array['result'] = [
                'id' => $note->id,
                'title' => $note->title,
                'body' => $note->body
            ];
    
        } else {
            $this->array['error'] = 'Nota não encontrado.';
        }        

        return $this->array;
    }

    public function new(Request $request) {
        $title = $request->input('title');
        $body = $request->input('body');

        if($title && $body) {
            $note = new Note();
            $note->title = $title;
            $note->body = $body;
            $note->save();

            $this->array['result'] = [
                'id' => $note->id,
                'title' => $note->title,
                'body' => $note->body
            ];

        } else {
            $this->array['error'] = 'Campos não enviados.';
        }

        return $this->array;
    }

    public function edit(Request $request, $id) {
        $title = $request->input('title');
        $body = $request->input('body');

        
        if($id && $title && $body) {

            $note = Note::find($id);
            if($note) {

                $note->title = $title;
                $note->body = $body;
                $note->save();

                $this->array['result'] = [
                    'id' => $id,
                    'title' => $title,
                    'body' => $body
                ];

            } else {
                $this->array['error'] = 'Nota não encontrado.';
            }

        } else {
            $this->array['error'] = 'Campos não enviados.';
        }

        return $this->array;
    }
    

}
