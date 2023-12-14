<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestUploadLogo;
use App\Models\Logo;
use Exception;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function logo()
    {
        return view('Admin.pages.settings.logo', ['title' => 'Settings']);
    }

    public function uploadLogo(RequestUploadLogo $request) {
        try {
            $logo = $request->file('file');
            $path = uploadImage($logo);

            Logo::create([
                'logo' => $path,
            ]);
        }catch (Exception $exception) {
            dd($exception->getMessage());
        }

        return back();
    }
}
