<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perfume;

class PerfumeController extends Controller
{
    public function index()
    {
        $perfumes = Perfume::all();

        return view('perfumes.index', [
            'perfumes' => $perfumes,

        ]);
    }

    public function show($id)
    {
        $perfume = Perfume::findOrFail($id);
        return view('perfumes.show', ['perfume' => $perfume]);
    }

    public function create()
    {
        return view('perfumes.create');
    }

    public function store()
    {
        $perfume = new Perfume();

        $perfume->name = request('name');
        $perfume->brand = request('brand');
        $perfume->notes = request('notes');
        $perfume->Entryname = request('user-name');
        $perfume->Content = request('content');
        $perfume->price = request('price');

        $perfume->save();

        return redirect('/',)->with('msg', 'Your entry was submitted');
    }

    public function destroy($id){
        $perfume = Perfume::findOrFail($id);
        $perfume->delete();

        return redirect('/perfume');


    }


}