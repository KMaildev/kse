<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $phone;
    public $email;
    public $subject;
    public $message;
    public $contact_date;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact.index');
    }

    public function storeContact()
    {

        $this->validate();
        $contact = new ModelsContact();
        $contact->name = $this->name;
        $contact->phone = $this->phone;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->contact_date = date("Y-m-d");
        $contact->save();
        session()->flash('message', 'Message sent successfully!');
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }
}
