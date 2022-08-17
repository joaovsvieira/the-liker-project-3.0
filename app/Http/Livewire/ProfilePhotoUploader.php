<?php

namespace App\Http\Livewire;

use App\Events\ProfilePhotoUpdated;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoUploader extends Component
{
    use WithFileUploads;

    public $photo;

    protected $rules = [
        'photo' => 'image|max:2048'
    ];

    public function updatedPhoto()
    {
        $this->resetErrorBag();
    }

    public function storePhoto()
    {
        $this->validate();

        auth()->user()->update([
            'profile_photo' => $this->photo->store('profile-photos', 'public')
        ]);

        $this->photo = null;

        broadcast(new ProfilePhotoUpdated(auth()->user()));
    }

    public function render()
    {
        return view('livewire.profile-photo-uploader');
    }
}
