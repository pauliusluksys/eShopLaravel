<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $name,$category_id;
    public $updateMode = false;
    public $users;
    private $categories;
    public function render()
    {
        $this->categories = Category::get()->toTree();
        return view('livewire.admin.categories.category-list',['categories' => $this->categories]);
    }





    private function resetInputFields(){
        $this->name = '';

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $this->category_id=$id;

    }
    public function add()
    {
        $validatedDate = $this->validate([
            'name' => 'required',

        ]);

        if ($this->category_id) {
            $parent = Category::find($this->category_id);
            Category::create(['name' => $this->name], $parent);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',

        ]);

        if ($this->category_id) {
            $category = Category::find($this->category_id);
            $category->update([
                'name' => $this->name,

            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }
    public function delete($id)
    {
        if($id){
            Category::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }


}
