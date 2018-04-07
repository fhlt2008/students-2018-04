<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::select('id','name')->paginate(10);

        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->post('name'),
            'gender' => $request->post('gender'),
            'birthday' => $request->post('birthday'),
            'username' => $request->post('username'),
            'nation' => $request->post('nation'),
            'politics' => $request->post('politics'),
            'origin' => $request->post('origin'),
            'card_id' => $request->post('card_id'),
            'dormitory' => $request->post('dormitory'),
            'phone' => $request->post('phone'),
            'qq' => $request->post('qq'),
            'we_chat' => $request->post('we_chat'),
            'email' => $request->post('email'),
            'address' => $request->post('address'),
        ]);
        session()->flash('success','成功');
        return redirect(route('students.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
}
