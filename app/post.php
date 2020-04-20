<?php 
namespace App;

class post{
 public function getPosts($session){
     if(!$session->has('posts')){
         $this->createDummyData($session);
     }
     return  $session->get('posts');
 }
 private function createDummyData($session)
 {
$posts=[
   [ 'title'=>'Learning Laravel',
    'content'=>'This blog will get you right track with laravel'
],
[
    'title'=>'Something else',
    'content'=>'Some  other content'
]
];
$session->put('posts',$posts);

 }
}

?>
