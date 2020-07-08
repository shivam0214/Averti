<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Mailtemplate;

class MailTemplateController extends Controller
{
    //

    public function index(){
        $templates = Mailtemplate::where([['user_id','=',Auth::user()->id],['is_status','=',0]])->orderBy('created_at', 'desc')->simplePaginate(50);
        return view('mail.templatelist',compact('templates'));
    }

    public function create(){
        return view('mail.template');
    }

    public function store(Request $request){
        $template = new Mailtemplate();
        $template->user_id = Auth::user()->id;
        $template->title = $request->title;
        $template->body = $request->body;
        $template->save();
        // dd($request->all());
        return redirect()->route('mailtemplate')->with('messgae','Mail Template is saved successfully.');
    }

    public function edit(Request $request){
        $detail = Mailtemplate::where('id',$request->templateid)->get();
        // dd($detail);
        return view('mail.templateedit',compact('detail'));
    }
    public function update(Request $request)
    {
        Mailtemplate::whereId($request->templateid)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('mailtemplate')->with('messgae','Mail Template is updated successfully.');
        
    }

    public function delete(Request $request){
        $template = Mailtemplate::find($request->templateid);
        $template->delete();
        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
        exit;
    }

    public function getTemplateBody(Request $request){
        $detail = Mailtemplate::where('id',$request->templateid)->get();
        return response()->json([
            'message' => 'Data deleted successfully!',
            'result'    => $detail
        ]);
        exit;
    }

}
