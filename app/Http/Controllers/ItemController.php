<?php
// 2023-10-13 3.week4

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $item[1] = 'コーヒー';
        // $item[2] = '紅茶';
        // $item[3] = 'ほうじ茶';
        $items = [
            1 => 'コーヒー',
            2 => '紅茶',
            3 => 'ほうじ茶',
        ];
        $item = "";
        if ($id > 0 && in_array($id, array_keys($items))) { //リストにない値が来た場合、空白で返す
            $item = $items[$id];
        }
        // ビューに受け渡すデータを生成
        $data = ['item' => $item];

        // resouces/view/item/show.blade.php を表示
        // データを受け渡す
        return view('item.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
