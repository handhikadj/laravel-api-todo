<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiStatus;
use App\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = Todo::all();
        return response()->json($data, ApiStatus::SUCCESS);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        Todo::create(request()->all());

        return response()->json(Todo::all(), ApiStatus::SUCCESS);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $data = Todo::find($id);
        return response()->json($data, ApiStatus::SUCCESS);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Todo $todo
     * @return JsonResponse
     */
    public function update($id)
    {
        Todo::find($id)->update(request()->all());
        return response()->json(Todo::all(), ApiStatus::SUCCESS);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        Todo::destroy($id);

        return response()->json(['message' => 'success'], ApiStatus::SUCCESS);
    }
}
