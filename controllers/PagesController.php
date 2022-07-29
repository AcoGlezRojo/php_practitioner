<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

class PagesController
{

    public function home()
    {
        require 'models/Task.php';
        $greeting = "Hello world";
        $tasks = App::get('database')->selectAll('todos', 'Task');

        return view('index', [
            'greeting'  =>  $greeting,
            'tasks'     =>  $tasks
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $users = App::get('database')->selectAll('users', null);
        return view('contact', compact('users'));
    }

    public function addName()
    {
        if (isset($_POST['name']) && !is_null($_POST['name'])) {
            App::get('database')->insert('users', [
                'name'  => $_POST['name']
            ]);

            // die('data saved');
            header('Location: /contact');
        }
    }

    public function arrays()
    {

        $posts = [
            new Post('My first post', 'JS', true),
            new Post('My second post', 'JS', true),
            new Post('My third post', 'AW', true),
            new Post('My fourth post', 'TR', false),
        ];

        $unPublishedPosts = array_filter($posts, function ($post) {
            return !$post->published;
        });

        $modified = array_map(function ($post) {
            // return (array) $post; //cast to array
            return ['title' => $post->title]; //get only title
        }, $posts);

        $author = array_column($posts, 'author', 'title');

        dumper($author);
    }
}
