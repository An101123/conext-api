<?php

namespace App\Repositories;

use App\Models\Category;
use  App\Repositories\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getCategories()
    {
        return Category::withCount(['hotNeed'])->get();
    }

    public function store($input)
    {
        try{
            Category::create($input);
            return response()->json([
                'message' => "Category created successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function getCategory($id)
    {
        return Category::find($id);
    }
    public function update($input, $id)
    {
        try{
            Category::find($id)->update($input);
            return  response()->json([
                'message' => "Category updated successfully"
            ]);
        } catch(\Exception $e){
           return $e;
        }
    }
    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return true;
    }
}
