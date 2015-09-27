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
    
    function zzz(){
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(1);
     
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render(); 
    }
    
    function gimme($digit){
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($digit);
     
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render(); 
    }
}
