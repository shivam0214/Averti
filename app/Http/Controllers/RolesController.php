<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RolesController extends Controller
{
    public function index(){
       //Role::create(['name'=>'user role']);
       //Permission::create(['name'=>'permission ']);
       $role= Role::findById(1);
       $permission=Role::findById(1);
       $role->givePermissionTo($permission);
        return view('roles.roles');
    }
    public function add(Request $r){
      //$input = new Roles;
      $input=$r->role;
      return response()->json(['success'=>"insert data".$input]);
    }
}
