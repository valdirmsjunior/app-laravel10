<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('admin.supports.index', compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupportRequest $request, Support $support)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('support.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support, string|int $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupportRequest $request,Support $support, string|int $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        $support->update($request->validated());

        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support, string $id)
    {
        if(!$support = $support->find($id)){
            return back();
        }

        $support->delete();

        return redirect()->route('support.index');
    }
}
