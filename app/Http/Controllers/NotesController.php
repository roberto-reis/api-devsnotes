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


    

}
