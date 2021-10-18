<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadFiles extends Component
{

    use WithFileUploads;
 
    public $files = [];
 
    public function save()
    {
        $this->validate([
            'files.*' => 'file|mimes:pdf,jpg,png|max:102400 ', // 12MB Max, and must be an image or pdf.
        ]);
 
        foreach ($this->files as $file) {
            $file->storeAs('files', $file);
        }
        
    }


    // public function render()
    // {
    //     return view('livewire.upload-files');
    // }
}
