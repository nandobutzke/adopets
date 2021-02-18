<?php

namespace App\Http\Controllers;
use App\Models\messages;


use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function loadMessages() {
        $messages = messages::get();

        return view('landing.messages', compact('messages'));
    }

    public function createMessage(Request $req) {
        $message = new messages();

        $message->fill($req->all());
        $message->save();

        return redirect('/')->with('success', 'A mensagem foi salva com sucesso!');
    }

    public function deleteMessage($id) {
        messages::destroy($id);

        return redirect('/mensagens');
    }
}
