<?php

class PageController{


    public function home(){

        

        $tasks = App::get('Database')->selectAll('tasks');

        require 'views/index.view.php';

    }

    public function About(){

        require 'views/about.view.php';

    }

    public function Contact(){

        require 'views/contact.view.php';

    }

}