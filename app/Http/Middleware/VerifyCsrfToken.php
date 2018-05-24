<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
          'tes/tambahkritik',
          'tes/tambahbakpao',
          'tes/ubahbakpao',
          'tes/lihatbakpao',
          'tes/hapusbakpao',
          'tes/tambahtransaksi',
          'tes/tolaktransaksi',
          'tes/historypenjual',
          'tes/tambahpenjual',
          'tesverified'
    ];
}
