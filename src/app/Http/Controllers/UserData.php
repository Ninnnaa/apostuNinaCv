<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\GeneralData;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserData extends Controller
{
    public function index()
    {
        return [
            'skills' => Skill::all(),
            'personalData' => GeneralData::all(),
            'experience' => Experience::all(),
        ];
    }
}
