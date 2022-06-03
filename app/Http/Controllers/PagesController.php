<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Bem-vindo ao ROFLapp!';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'Sobre nós!';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Serviços!',
            'services' => ['Web Design', 'Programação', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
