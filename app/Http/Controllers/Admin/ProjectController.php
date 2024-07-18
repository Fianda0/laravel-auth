<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progetti = Project::all();

        $data = [
            "progetti" => $progetti
        ];

        return view('admin.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HttpRequest $request)
    {
        // dd($request->all());

        // $data = $request->all();

        // $newProject = new Project();
        // $newProject->titolo = $data['titolo'];
        // $newProject->descrizione = $data['descrizione'];
        // $newProject->immagine = $data['immagine'];
        // $newProject->category_id = rand(1, 4);
        // $newProject->save();

        $val = $request->validate([
            'titolo' => 'required',
            'descrizione' => 'nullable',
            'immagine' => 'nullable|image',
            'category_id' => 'required'
        ]);

        if ($request->has('immagine')) {

            $img = Storage::put('uploads', $request->immagine);
            $val['immagine'] = $img;
            // dd($img, $val);
        }

        // dd($val);
        Project::create($val);
        return redirect()->route('admin.projects.index');
        // return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = [
            "project" => $project
        ];

        return view("admin.projects.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categorie = Category::all();

        $data = [
            "categorie" => $categorie,

            "progetto" => $project
        ];

        return view("admin.projects.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HttpRequest $request, Project $project)
    {
        // $data = $request->all();


        // $project->titolo = $data['titolo'];
        // $project->descrizione = $data['descrizione'];
        // $project->immagine = $data['immagine'];
        // $project->category_id = $data['category_id'];
        // $project->save();

        // return redirect()->route('admin.projects.index', $project->id);

        $val = $request->validate([
            'titolo' => 'required',
            'descrizione' => 'nullable',
            'immagine' => 'nullable|image',
            'category_id' => 'required'
        ]);

        if ($request->has('immagine')) {

            $img = Storage::put('uploads', $request->immagine);
            $val['immagine'] = $img;

            if ($project->immagine && !Str::startsWith($project->immagine, 'http')) {
                Storage::delete($project->immagine);
            }
            // dd($img, $val);
        }

        $project->update($val);

        // dd($val);        
        return redirect()->route('admin.projects.index', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        if ($project->immagine && !Str::startsWith($project->immagine, 'http')) {
            // not null and not startingn with http
            Storage::delete($project->immagine);
        }


        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
