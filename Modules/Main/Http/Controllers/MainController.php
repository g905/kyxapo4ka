<?php

namespace Modules\Main\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index() {
        $cats = \Modules\Catalog\Entities\Category::where(['active' => true])->orderBy('sort', 'asc')->get();
        return view('main::index', ['cats' => $cats]);
    }

    public function feedback(Request $request) {
        sleep(2);
        if (!$request->ajax()) {
            return false;
        }

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
                    'name' => 'required|max:255',
                    'message' => 'required'
                        ],
                        [
                            'name.required' => 'Представьтесь, пожалуйста',
                            'message.required' => 'Напишите что-нибудь'
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors()->setFormat(':key - :message'), 500);
        }

        $fdb = new \App\Mail\Feedback(setting('site.email'), $validator->validated());
        if ($fdb) {
            \Illuminate\Support\Facades\Mail::to($fdb->email)->send($fdb);
        }
        return response()->json(['success' => 'Сообщение успешно отправлено!'], 200);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create() {
        return view('main::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request) {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id) {
        return view('main::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id) {
        return view('main::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id) {
        //
    }

}
