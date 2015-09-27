<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Evanna
 */
class First extends Application{
     function __construct() {
        parent::__construct();
    }
    
     function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
     
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();      
    }
}
