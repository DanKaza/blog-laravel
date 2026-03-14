<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() 
    {
        return  [
        [
            'id' => 1,
            'slug' => 'just-one',
            'title' => 'Just One',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae'
        ],
        
        [
            'id' => 2,
            'slug' => 'just-two',
            'title' => 'Just Two',
            'author' => 'Dammiyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Magni ex vitae suiqwnas jsdhsdapijn ajndasa'
        ]
    ];


    }
    public static function find($slug):array
    {


    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    
    if(!$post) {
        abort(404);
  
    }
    return $post;
}
}
?>