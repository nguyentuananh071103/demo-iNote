<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
//        $userId = Auth::user()->id;
//        $categories = $this->categoryRepository->getByUserId($userId);
        $categories = $this->categoryRepository->getAll();
        return view("backend.category.list", compact("categories"));
    }

    public function create()
    {
        return view("backend.category.create");
    }

    public function store(CreateCategoryRequest $request)
    {
//        $validated = $request->validate([
//            "name" => "required | max:20 | min:6",
//            "description" => "required"
//        ]);
        $this->categoryRepository->create($request);
        return redirect()->route('categories.list');
    }

    public function show($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view("backend.category.detail", compact("category"));
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view("backend.category.update", compact("category"));
    }
    public function update(Request $request, $id)
    {
//        dd($request);
        $this->categoryRepository->update($request, $id);
        return redirect()->route("categories.list");
    }

    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->route("categories.list");
    }
}

