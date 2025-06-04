<?php

namespace App\Livewire\Form;

use Livewire\Component;

class UserInfo extends Component
{

    public string $first_name;
    public string $last_name;
    public string $email;
    public string $contact_number;

    public array $championInfo = [];

  


    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'max:100', 'email', 'unique:champions,email'],
            // 'contact_number' => ['required', 'regex:/^(09|\+639|9)\d{9}$/'],
        ];
    }
       
    public function messages()
    {
        return [
            'contact_number.regex' => 'The contact number must be a valid mobile number.',
        ];
    }
  


    public function mount()
    {

        $this->championInfo = session()->get('champion_info', []);

    }


      /**
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(): void
    {
        $this->validate();

        session()->put('champion_info', [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'contact_number' =>  $this->contact_number,
        ]);

        $this->dispatch('goToNextStep');
    }





    public function render()
    {
        return view('livewire.form.user-info');
    }
}
