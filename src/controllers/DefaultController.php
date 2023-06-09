<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function profil()
    {
        $this->render('profil');
    }
    public function game()
    {
        $this->render('game');
    }

    public function rules()
    {
        $this->render('rules');
    }
    
    public function addcard()
    {
        $this->render('addcard');
    }

    public function mycards()
    {
        $this->render('mycards');
    }
}
