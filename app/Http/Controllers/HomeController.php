<?php namespace App\Http\Controllers;

use App\Game;
use App\Username;
use App\UsernameType;
use App\ChatMessage;
use Carbon\Carbon;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $free = Game::where('isFree', true)->get();
        $notFree = Game::where('isFree', false)->get();
		return view('home')
            ->with('free', $free->chunk(4))
            ->with('notFree', $notFree->chunk(4));
	}

    public function usernames()
    {
        $usernames = Username::all();
        $types = UsernameType::all();

        return view('usernames')
            ->with('usernames', $usernames)
            ->with('types', $types);
    }

    public function saveUsername()
    {
        $username = \Input::get('username');
        $type_id = \Input::get('type_id');

        if(!empty($username) && isset($type_id)){
            Username::insert([
                'username' => $username,
                'type_id' => $type_id
            ]);
        }

        return redirect()->back();
    }

    public function getChat()
    {
        return ChatMessage::take(100)->orderBy('created_at', 'DESC')->get();
    }

    public function saveChat()
    {
        ChatMessage::insert([
            'message' => \Input::get('message'),
            'name' => \Input::get('name'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function brackets()
    {
        return view('brackets');
    }

}
