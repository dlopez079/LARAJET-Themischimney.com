<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentForm extends Component
{

    // Create variable for form field data.
    public $description;
    public $showModalForm = false;
    

    // Display the commment model upon button click.
    public function showCreateCommentModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeComment for the Create Comment Modal
    public function storeComment(){

        // Gather information from the Create comment Modal and enter it into MySql.
        $this->validate([
            'description' => 'required|min:5',
          ]);

        $comment =new comment();
        $comment->user_id = auth()->user()->id;
        $comment->team_id = auth()->user()->currentteam->id;
        $comment->description = $this->description;
       
        $comment->save();
        $this->reset();
    }
   
    public function render()
    {
        return view('livewire.comments-form', [
            'comments' => comment::all()
        ]);
    }
}
