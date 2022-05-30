<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $student = Student::get();
        // dd($student);
        return view('index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $params = $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'birth_date' => 'required',
                'action' => 'required'
            ]
        );

        Student::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'birth_date' => $request->birth_date,
                'action' => $request->action
        ]);

        return redirect()->route('index');
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
        $student = Student::where('id', '=', $id)->first();

        return view('edit', ['student' => $student]);
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
        $student = Student::where('id', '=', $id)->first();

        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'birth_date' => 'required',
                'action' => 'required'
            ]
        );

        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'birth_date' => $request->birth_date,
            'action' => $request->action,
        ];

        $student->update($data);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::where('id', '=', $id)->first();
        $student->delete();

        return redirect()->route('index');
    }
}
