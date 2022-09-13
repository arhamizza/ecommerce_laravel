<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailAttach;
use App\Models\User;
use App\Notifications\Informasi;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirim()
    {
        Mail::to('arhamizza2@gmail.com')->send(new Email());
        // return new Email();
    }

    public function attach()
    {
        $text = [
            'subject'=>'Pengiriman Dari Controller'
        ];
        Mail::to('arhamizza2@gmail.com')->send(new EmailAttach($text));
    }

    public function notif()
    {
        $user = User::first(); 
        $data = [
            'line1'=>'Pesanan Anda Telah Disetujui',
            'action'=>'Klik Ok',
            'line2'=>'Batas Transer Tanggal .. .',
        ];
        $user->notify(new Informasi($data));
    }
}
