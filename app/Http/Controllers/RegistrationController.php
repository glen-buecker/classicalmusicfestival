<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class RegistrationController
{
    public function index()
    {
        return Inertia::render('CMF/Registration/Show', [
        ]);
    }
}
