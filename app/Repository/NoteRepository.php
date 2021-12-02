<?php

namespace App\Repository;

use App\Http\Controllers\NoteController;
use App\Models\note;

class NoteRepository
{
    public function getAll()
    {
        $notes = Note::all();
        return $notes;
    }

    public function create($request)
    {
        $data = $request->only('name','description','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $note = Note::query()->create($data);
    }

    public function store($request)
    {
        $data = $request->only('name','request');
        Note::query()->create();
    }



    public function getById($id)
    {
        $note = Note::findOrFail($id);
        return $note;
    }

    public function update($request, $id)
    {
        Note::query()->findOrFail($id);
        $data = $request->only('name','description','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        return Note::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $note = Note::query()->findOrFail($id);
        $note->delete();
    }
}
