<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
class Taskcontroller extends Controller
{
    public function list(){
        $data['getRecord']=TaskModel::getTask();
        $data['header_title'] = "Task List";
        return view('list',$data);
    }
    public function add(){
        $data['header_title'] = "Tambah Task";
        return view('add',$data);
    }
    public function insert(Request $request){
        //dd($request->all());
        $save=new TaskModel;
        $save->text=$request->text;
        $save->status=0;
        $save->tglselesai = $request->tglselesai;
        $save->save();
        return redirect('/')->with('succes', "Kelas telah ditambahkan");
    }
    public function finishTask($id){
    $task = TaskModel::find($id);

    if (!$task) {
        return redirect('/')->with('error', 'Tugas tidak ditemukan.');
    }

    $task->status = 1;
    $task->save();
    return redirect('/')->with('success', 'Tugas selesai');
    }
public function destroy($id){
    $task = TaskModel::find($id);

    if (!$task) {
        return redirect('/')->with('error', 'Tugas tidak ditemukan.');
    }

    $task->delete();
    return redirect('/')->with('success', 'Tugas berhasil dihapus.');
    }

}
