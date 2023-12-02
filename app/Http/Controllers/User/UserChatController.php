<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Chatify\Facades\ChatifyMessenger as Chatify;

class UserChatController extends Controller
{
    protected $perPage = 30;

    public function pusherAuth(Request $request)
    {
        return Chatify::pusherAuth(
            $request->user(),
            Auth::user(),
            $request['channel_name'],
            $request['socket_id']
        );
    }

    public function index($id = null)
    {
        return view('pages.user.chat', [
            'id' => $id ?? 0,
        ]);
    }
}
