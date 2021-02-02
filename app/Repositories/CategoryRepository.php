<?php

namespace App\Repositories;

use App\Models\Category;
use  App\Repositories\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getCategories()
    {
        return Category::all();
    }

    public function store($input)
    {
        try{
            Category::create($input);
            return true;
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
            return true;
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
