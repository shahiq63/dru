<?php
namespace Drupal\custom_page\Controller;
class CustomPageController {
   public function custompage(){
       return array(
           '#title'=> 'My Custom Page',
           '#markup'=> '
            <div class="container">
                <div class="jumbotron">
                    <h1>Bootstrap Tutorial</h1>
                    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                    responsive, mobile-first projects on the web.</p>
                </div>
            </div>'
            );
   } 
}