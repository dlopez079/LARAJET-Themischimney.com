<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Project;
use App\Models\Attachment;
use Http\Livewire\AsyncAws\S3\S3Client;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage; // Required to pull attachments from S3.


class UploadFiles extends Component
{

    use WithFileUploads;

    public $file;  // Required to save the multiple files from the upload form.
    public $fileNameArr = []; // Required to save mutliple file names retrieved from the upload form.
    public $fileName;  // Required to save file names from the
    public $selected_project_id;
    public $uploadFilesModal = false;

    protected function getListeners()
    {
        return [
            'showUploadFilesModal' => 'showUploadFilesModal',
        ];
    }

    public function showUploadFilesModal(Project $project)
    {
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->uploadFilesModal = true;

        // Accepted emitted project ID from the project view component and save it to a variable on this component.
        $this->selected_project_id = $project->id;
    }

    /**
     * Created a method called 'save'.
     * The instructions from this method will begin when the upload Documents button is clicked on the form.
     */
    public function saveAttachments()
    {
        /**
         * A validation is created to make sure that the files coming under 
         */
        $this->validate([
            'file.*' => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048', // 12MB Max
        ]);

        /**
         * Save the filename, the path and the url to prepare for the database save.
         */

        $fileName = date("Ymd-hi") . '-' . $this->file->getClientOriginalName(); // Save the original name of the file along with a time stamp in a variable called fileName

        $path = $this->file->storeAs('attachments', strval($fileName), 's3'); // Save attachment on Amazon S3// Store in the "attachment" directory of the local-themischimney.com bucket with original file name.  The file name must be a string so I obtain the string value from the variable.

        $url = 'https://' . env('AWS_BUCKET') . '.s3.amazonaws.com/' . $path; // Put the URL together for the file just uploaded.

        // Create an objec that will include the current parent component object and along with the fileName and $url
        $fileRecord = new Attachment(); // Create a new Attachment object that will store info for the attachment table in MySQL.
        $fileRecord->project_id = $this->selected_project_id;  // Fetch the selected project id and save it in the project_id column of the files table.
        $fileRecord->user_id = auth()->user()->id; // Fetch the authenticated users's id and save it to the user_id column of the files table.
        $fileRecord->file_name = $fileName; // Save the original name of the file.
        $fileRecord->file_path = $url; // Save the Amazon S3 address to file_path
        $fileRecord->save(); // Save instance onto the MySQL row.



        // The flash message below will generate successful if the validation and upload are both successful.
        session()->flash('message', 'You successfully saved the file to the project.');

        $this->emit('refreshProjectView', $this->selected_project_id);

        $this->reset();
    }


    public function render()
    {
        return view('livewire.upload-files');
    }
}
