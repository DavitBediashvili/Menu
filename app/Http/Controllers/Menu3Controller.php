<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu3;

class Menu3Controller extends Controller
{
    public function menuList(Request $request) {
        $menu = [];
        $category = Menu3::select('category')->distinct()->get();
        foreach ($category as $value){
            array_push($menu, Menu3::where('category', '=', $value->category)->orderBy('priority')->limit(4)->get());   
        }

        if ($request->input("search_input") != "") {
            $search_name = $request->input("search_input");
            $result = Menu3::where('name', 'like', "%$search_name%")->get();
            return view("search", ["search" => $result]);
        }
        return view("menu", ["menu" => $menu]);
    }

    
    public function foodList($category) {
        $food = Menu3::where('category', '=', $category)->orderBy('priority')->get();
        return view("list", ["food" => $food]);
    }

    public function show() {
        $infos = Menu3::select('id', 'category', 'name', 'priority', 'price')->get();
        return view("admin", ["infos" => $infos]);
    }

    public function edit(Request $request) {
        if ($request->input("edit") != ""){

            $id = $request->input("edit");

            if ($request->input("priority") != "") {
                $priority_input = $request->input("priority");
                Menu3::where('id', $id)->update(['priority' => $priority_input]);         
            }

            if ($request->input("category") != ""){
                $category_input = $request->input("category");
                Menu3::where('id', $id)->update(['category' => $category_input]);         
            } 

            if ($request->input("name") != ""){
                $name_input = $request->input("name");
                Menu3::where('id', $id)->update(['name' => $name_input]);         
            }   
            if ($request->input("price") != ""){
                $price_input = $request->input("price");
                Menu3::where('id', $id)->update(['price' => $price_input]);         
            }      
        }

        if ($request->input("delete")) {
            $id = $request->input("delete");
            Menu3::where('id', $id)->delete();
        }

        if ($request->input("add") != "") {
            Menu3::create([
                "category" => $request->input("new_category"),
                "name" => $request->input("new_name"),
                "priority" => $request->input("new_priority"),
                "price" => $request->input("new_price")
            ]);
        }

        if ($request->input("back") != "") {
            redirect('/');
        }

        return $this->show();
            
    }

}
