<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Wotle - Wonderful Suttle',
        ];
        return view('homepage/homepage', $data);
    }

    public function download()
    {
        return $this->response->download('wotle_assets/file_download/iwdm.rar', null);        
    }

    public function kirim_email()
    {
        $email = $this->request->getVar('email');
        $token = $this->request->getVar('token');
        $message = ' <div>
                        <h3 style="font-weight: bold;">Wotle - Wonderful Sutle</h3>
                        <p>Klik tombol dibawah ini untuk mengaktifkan akun</p>                        
                        <a href="/verifikasi-akun?email='.$email.'?token='.$token.'" style="background: lightblue; padding: 10px; border-radius:10px;">Aktifkan</a>                         
                    </div>';        
        $this->sendEmail($email, 'Verifikasi Akun Wotle', $message);
    }

    private function sendEmail($to, $title, $message){

        $email = \Config\Services::email();
        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'wotle.org';
        $config['SMTPUser'] = 'cs@wotle.org';
        $config['SMTPPass'] = 'cs@wotle.org';
        $config['SMTPPort'] = 465;
        $config['SMTPCrypto'] = 'ssl';
        $config['SMTPTimeout'] = 30;

        $config['charset']  = 'utf-8';
        // $config['wordWrap'] = true;

        $email->initialize($config);

        $email->setFrom('cs@wotle.org', 'no-reply Wotle');
        $email->setTo($to);
        
        $email->setSubject($title);
        $email->setMessage($message);
       
       //menambahkan attachement
        // $email->attach( ROOTPATH . 'public/attachment.pdf');
        
        //menambahkan debuging error
        if (! $email->send())
        {
            // Generate error
            dd($email->printDebugger(['headers', 'subject', 'body']));
        }else{
            dd('Email terkirim');
        }        
    }

    public function verifikasi_akun()
    {
        $data = [
            'title' => 'verifikasi_akun',
            'token' => $this->request->getVar('token'),
            'email' => $this->request->getVar('email'),
        ];
        return view('homepage/verifikasi_akun',$data);
    }


    public function payment_success()
    {
        $data = [
            'title' => 'Payment Success',
        ];
        return view('homepage/finish_payment', $data);
    }
    public function payment_failed()
    {
        $data = [
            'title' => 'Payment Failed',
        ];
        return view('homepage/unfinish_payment', $data);
    }
    public function payment_error()
    {
        $data = [
            'title' => 'Payment Error',
        ];
        return view('homepage/error_payment', $data);
    }
}
