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
