<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
       } 
       
    public function about() { 
        return 'Malik Adzano : 2341760161'; 
       }
       
    public function articles($id){
        return 'Halaman artikel dengan id ' . $id;
    }

}
