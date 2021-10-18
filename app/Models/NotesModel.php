<?php

namespace App\Models;

use CodeIgniter\Model;

class NotesModel extends Model
{
    protected $table = 'notes';
    protected $useTimestamps = true;
    protected $dateFormat = 'date';
    protected $allowedFields = ['note_title', 'slug', 'note_content'];

    public function getNotes($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
