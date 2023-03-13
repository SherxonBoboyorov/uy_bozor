<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePage;
use App\Http\Requests\Admin\UpdatePage;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('created_at', 'DESC')->get();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePage $request)
    {
        $data = $request->all();

        if(Page::create($data)) {
            return redirect()->route('page.index')->with('message', 'Created  successfully!!!');
        }
        return redirect()->route('page.index')->with('message', 'Unable to create!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePage  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, $id)
    {
        if (!Page::find($id)) {
            return redirect()->route('page.index')->with('message', "not fount");
        }
        $page = Page::find($id);

        $data = $request->all();

        if ($page->update($data)) {
            return redirect()->route('page.index')->with('message', "changed successfully");
        }
        return redirect()->route('page.index')->with('message', "Unable to update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Page::find($id)) {
            return redirect()->route('page.index')->with('message', "not found");
        }

        $page = Page::find($id);

        if ($page->delete()) {
            return redirect()->route('page.index')->with('message', "deleted successfully");
        }
        return redirect()->route('page.index')->with('message', "unable to delete");
    }
}
