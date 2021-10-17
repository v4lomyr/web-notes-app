<?php

namespace App\Controllers;

use \App\Models\NotesModel;

class Notes extends BaseController
{
    protected $notesModel;

    public function __construct()
    {
        $this->notesModel = new NotesModel();
    }

    public function index()
    {
        $data = [
            'notes' => $this->notesModel->getNotes()
        ];

        return view('Dashboard', $data);
    }

    public function detail($slug)
    {
        $data = [
            'note_detail' => $this->notesModel->getNotes($slug)
        ];

        return view('Detail', $data);
    }

    public function edit()
    {
        return view('Edit');
    }

    public function add()
    {
        return view('Add');
    }
}
