<?php

namespace App\Controllers;

use \App\Models\NotesModel;
use CodeIgniter\Validation\Rules;

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

        if (empty($data['note_detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Note not found');
        }

        return view('Detail', $data);
    }

    public function edit($slug)
    {
        $data = [
            'note_detail' => $this->notesModel->getNotes($slug),
            'validation' => \Config\Services::validation()
        ];

        return view('Edit', $data);
    }

    public function add()
    {
        $data['validation'] = \Config\Services::validation();

        return view('Add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'note_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul note tidak boleh kosong'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('note_title'), '-', true);
        $this->notesModel->save([
            'note_title' => $this->request->getVar('note_title'),
            'slug' => $slug,
            'note_content' => $this->request->getVar('note_content')
        ]);

        session()->setFlashdata('message', 'notes added successfully');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->notesModel->delete($id);
        session()->setFlashdata('message', 'notes deleted successfully');
        return redirect()->to('/');
    }

    public function update($id)
    {
        if (!$this->validate([
            'note_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul note tidak boleh kosong'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('note_title'), '-', true);
        $this->notesModel->save([
            'id' => $id,
            'note_title' => $this->request->getVar('note_title'),
            'slug' => $slug,
            'note_content' => $this->request->getVar('note_content')
        ]);

        session()->setFlashdata('message', 'notes updated successfully');

        return redirect()->to('/');
    }
}
