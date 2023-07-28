<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HamletRequest;
use App\Models\Hamlet;
use App\Models\Village;
use Illuminate\Http\Request;

class HamletController extends Controller
{
    public function index()
    {
        $villages = Village::all();
        return view('admin.hamlet.index', compact('villages'));
    }

    public function create($id)
    {
        $village = Village::find($id);
        return view('admin.hamlet.create', compact('village'));
    }

    public function store(HamletRequest $hamletRequest, $id)
    {
        $validated = $hamletRequest->validated();
        $hamlet = new Hamlet($validated);
        $hamlet['village_id'] = $id;
        $hamlet->save();

        return redirect()->route('admin.hamlet.show', $id)->with('status', 'Data Dusun Berasil di Tambahkan');
    }

    public function show($id)
    {
        $village = Village::find($id);
        return view('admin.hamlet.show', compact('village'));
    }

    public function edit($id)
    {
        $hamlet = Hamlet::find($id);
        return view('admin.hamlet.edit', compact('hamlet'));
    }

    public function update(HamletRequest $hamletRequest, $id)
    {
        $hamlet = Hamlet::find($id);
        $validated = $hamletRequest->validated();
        $hamlet->update($validated);

        return redirect()->route('admin.hamlet.show', $hamlet->village->id)->with('status', 'Data Dusun Berasil di Edit');
    }

    public function destroy($id)
    {
        $hamlet = Hamlet::find($id);
        $village = $hamlet->village->id;
        $hamlet->delete();

        return redirect()->route('admin.hamlet.show', $village)->with('status', 'Data Dusun Berasil di Hapus');
    }
}
