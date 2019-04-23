<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

   
    public function create()
    {
        $role = New Role();
        return view('admin.roles.create', compact('role'));

    }

  
    public function store(Request $request)
    {
        Role::create($this->validateRequest());


        return redirect()->route('roles.index')->with('success','Role has been created!');
    }

  
    public function show($id)
    {
        //
    }


    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

 
    public function update(Request $request, Role $role)
    {
        $this->validate($request, array(
            'name' => "required|min:2|unique:roles,name,$role->id",
        ));
        $category->update($request->all());


        return redirect()->route('roles.index')->with('success','Role has been updated!');
    }

 
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('error','Role has been deleted!');


    }
        private function validateRequest(){
           
        return request()->validate([
            'name' => 'required|min:2|unique:roles,name',
        ]);
        
    }

}
