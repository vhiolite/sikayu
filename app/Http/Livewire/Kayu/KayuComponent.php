<?php

namespace App\Http\Livewire\Kayu;

use Livewire\Component;
use App\Models\Kayu;

class KayuComponent extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Data Kayu',
            'kayu' => Kayu::orderByDesc('id')->get(),
            // 'date' => date('d/m/Y', strtotime(Kayu::select('created_at')->get()))
            'date' => Kayu::select('created_at')->first()
        ];
        return view('livewire.kayu.kayu-component', $data)->layout('layouts.base');
    }
}
