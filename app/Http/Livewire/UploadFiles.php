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
            'files.*' => 'file|max:102400 ', // 12MB Max
        ]);
 
        foreach ($this->files as $file) {

            // Store the uploaded file in the "files" directory of the default filesystem disk.
            $file->store('files');
            
            // Store in the "files" directory in a configured "s3" bucket.
            $file->store('files', 's3');
            
            // Store in the "files" directory with the filename "avatar.png".
            $file->storeAs('files', 'avatar');
            
            // Store in the "files" directory in a configured "s3" bucket with the filename "avatar.png".
            $file->storeAs('files', 'avatar', 's3');
            
            // Store in the "files" directory, with "public" visibility in a configured "s3" bucket.
            $file->storePublicly('files', 's3');
            
            // Store in the "files" directory, with the name "avatar.png", with "public" visibility in a configured "s3" bucket.
            $file->storePubliclyAs('files', 'avatar', 's3');
        }
        
    }


    public function render()
    {
        return view('livewire.upload-files');
    }
}
