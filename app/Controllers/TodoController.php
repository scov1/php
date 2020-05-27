<?php


namespace App\Controllers;


use App\Models\Todo;
use Klein\ResponseCookie;

class TodoController
{
    function index()
    {
        $id = request()->cookies()->get('user');

        if(empty($id))
            $id = $this->generateUserId();


        return view('index', [
            'title' => config('app.name'),
            'todos' => Todo::find('all', [
                'conditions' => ['user_id=?', $id]
            ])
        ]);

    }

    protected function generateUserId()
    {
        $id = md5(hexdec(uniqid()));

        $expire = time() + (365 * 24 * 3600);
        $cookie = new ResponseCookie('user', $id, $expire);

        response()->cookies()->set('user', $cookie);

        return $id;
    }

    function store()
    {
        $todo = new Todo();
        $todo->name = request()->param('name');
        $todo->user_id = request()->cookies()->get('user');
        $todo->done = (request()->param('done')) ? true : false;
        $todo->save();

        response()->redirect('/');
    }

    function findOrFail($id): Todo
    {
        $todo = Todo::find_by_id($id);

        if (empty($todo))
            response()->code(404)->send();

        return $todo;

    }

    function update()
    {
        $todo = $this->findOrFail(request()->param('id'));
        $todo->name = request()->param('name');
        $todo->save();

        response()->redirect('/');
    }

    function delete()
    {
        $todo = $this->findOrFail(request()->param('id'));
        $todo->delete();

        response()->redirect('/');
    }

    function toggle()
    {
        $todo = $this->findOrFail(request()->param('id'));
        $todo->done = !$todo->done;
        $todo->save();

        response()->redirect('/');
    }
}