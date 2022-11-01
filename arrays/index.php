<?php


class Post
{

  public $title;

  public $author;

  public $published;

  public function __construct($title, $author, $published)

  {

    $this->title = $title;
    $this->author = $author;
    $this->published = $published;

  }

}

$posts = [

  new Post('My First Post', 'KH', true),
  new Post('My Second Post', 'KH', true),
  new Post('My Third Post', 'AB', true),
  new Post('My Fourth Post', 'KH', false)

];

// Array filter example - return a boolean if item is included in filter

$unpublishedPosts = array_filter($posts, function ($post) {
  return ! $post->published;

});

var_dump($unpublishedPosts);


// Array map example - transform an object in some way

$modified = array_map(function ($post) {
  $post->published = true;

  return $post;
}, $posts);

var_dump($modified);

// Array column examples - pull a a value from each item in collection 

$titles = array_column($posts, 'title');

var_dump($titles);

$authors = array_column($posts, 'author', 'title');
var_dump($authors);
