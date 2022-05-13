<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Models\Message;

class CreateMessageController extends Controller
{
    public function __invoke(CreateMessageRequest $request)
    {
        Message::create($request->safe()->all());

        return redirect()->back()->with('success', 'Message sent. Talk to you soon!');
    }
}
