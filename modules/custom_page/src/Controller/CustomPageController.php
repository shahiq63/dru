<?php
namespace Drupal\custom_page\Controller;
class CustomPageController {
   public function custompage(){
    for($i=0;$i<10;$i++)
    {   
    $build[$i]=[
        'ele'=>[
         '#markup'=>'<p>This is Pakistan.</p>'   
        ],
        'ele1'=>[
            '#title'=>'This is new',
            '#markup'=>'<h1>Hello There</h1>'

        ],
    ];
       return $build[$i];
    }
//    return array(
//             '#title'=> 'My Custom Page',
//             '#markup'=>'
//              <div class="container">
//                  <div class="jumbotron">
//                      <h1>Bootstrap Tutorial</h1>
//                      <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
//                      responsive, mobile-first projects on the web.</p>
//                  </div>
//              </div>'
//              );
       
     
    } 
}