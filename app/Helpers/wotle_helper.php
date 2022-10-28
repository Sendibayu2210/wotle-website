<?php

use App\Models\UsersModel;

function formatRupiah($rupiah)
{
    echo number_format($rupiah, 0, ',', '.');
}

function titleTop($judul)
{
    echo '<div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-lime">' . $judul . '</div>';
}

function toast_message()
{
    if (session()->getFlashdata('message')) :
        echo '<div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-white">' . session()->getFlashdata('message1') . '</div>
                <div class="toast-body bg-light">' . session()->getFlashdata('message') . '</div>
            </div>
        </div>';
    endif;
}

function cek_session()
{
    if (!session()->get('username')) {
        return redirect('login');
    }
}

function random_character()
{
    $n = 6;
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
