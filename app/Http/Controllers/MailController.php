<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        $nama = $request->input('nama');
        $email = $request->input('email');
        $pesan = $request->input('pesan');

        $to = "muhamadrifqi1000@gmail.com";
        $subject = "Pesan dari " . $nama;
        $message = "Nama: " . $nama . "\nEmail: " . $email . "\nPesan:\n\n" . $pesan;

        Mail::raw($message, function($mail) use ($to, $subject, $email) {
            $mail->to($to);
            $mail->subject($subject);
            $mail->from($email);
        });

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
