<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery_category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class GalleryCategoryController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;
    protected $message;
    protected $errormessage;
    public function __construct(Gallery_category $object)
    {

        $this->middleware('auth');
        $this->object = $object;
        $this->viewName = 'admin.gallery-category.';
        $this->routeName = 'gallery-category.';
        $this->message = 'تم حفظ البيانات';
        $this->errormessage = 'راجع البيانات هناك خطأ';
    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Gallery_category::all();
        return view($this->viewName.'index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewName.'add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token']);


        Gallery_category::create($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'تم الحفظ بنجاح');
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
        $row=Gallery_category::where('id',$id)->first();
        return view($this->viewName.'edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token']);



        Gallery_category::findOrFail($id)->update($input);
            return redirect()->route($this->routeName.'index')->with('flash_success', 'تم الحفظ بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Gallery_category::where('id',$id)->first();

        try {

            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            return redirect()->back()->with('flash_danger', 'هذا الجدول مربوط بجدول اخر ..لا يمكن المسح');
        }
    }
}