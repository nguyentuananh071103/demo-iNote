<?php

namespace App\Http\Controllers;

use App\Repository\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        $notes = $this->noteRepository->getAll();
        return view("backend.note.list", compact("notes"));
    }

    public function create()
    {
        return view("backend.note.create");
    }

    public function store(Request $request)
    {
        $this->noteRepository->create($request);
        return redirect()->route('notes.list');
    }

    public function show($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.detail", compact("note"));
    }

    public function edit($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.update", compact("note"));
    }

    public function update(Request $request, $id)
    {
        $this->noteRepository->update($request, $id);
        return redirect()->route("notes.list");
    }

    public function destroy($id)
    {
        $this->noteRepository->delete($id);
        return redirect()->route("notes.list");
    }
}
