<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Kayu;
use App\Models\KayuMasuk;
use App\Models\KayuKeluar;

class DashboardComponent extends Component
{
    public function render()
    { 
        $data = [
            'title' => 'Dashboard SI KAYU',
            'kayu' => Kayu::count(),
            'kayuMasuk' => kayuMasuk::count(),
            'kayuKeluar' => kayuKeluar::count(),

        ];

        return view('livewire.admin.dashboard-component')->layout('layouts.base');
    }
}
