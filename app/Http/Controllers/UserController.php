<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Registrants;
use App\Models\Worships;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $church = Church::all();
        $worship = Worships::all();
        return view('user.index')->with([
            'church' => $church,
            'worship' => $worship
        ]);
    }

    public function sendRegist(Request $request)
    {
        $data = $request->all();
        $churchId = $request->post('church_id');
        $church = Church::where('id', $churchId)->first();
        // var_dump($data['church'])
        // var_dump($data['answer_2']);die();
        $request->validate(
            [
                'church_id' => 'required',
                'worship_id' => 'required',
                'fullname' => 'required',
                'address' => 'required',
                'region' => 'required',
                'age' => 'required',
                'phone_number' => 'required',
                'answer_1' => 'required',
                'answer_2' => 'required',
                'answer_3' => 'required',
                'answer_4' => 'required',
                'answer_5' => 'required',
                'answer_6' => 'required',
                'answer_7' => 'required',
                'answer_8' => 'required',
            ],
            [
                'worship_id.required' => 'Kolom ibadah wajib diisi',
                'church_id.required' => 'Kolom tempat wajib diisi',
                'fullname.required' => 'Kolom nama lengkap wajib diisi',
                'address.required' => 'Kolom alamat wajib diisi',
                'region.required' => 'Kolom wilayah wajib diisi',
                'age.required' => 'Kolom umur wajib diisi',
                'phone_number.required' => 'Kolom nomor telepon wajib diisi',
                'answer_1.required' => 'Pertanyan pertama wajib diisi',
                'answer_2.required' => 'Pertanyan kedua wajib diisi',
                'answer_3.required' => 'Pertanyan ketiga wajib diisi',
                'answer_4.required' => 'Pertanyan keempat wajib diisi',
                'answer_5.required' => 'Pertanyan kelima wajib diisi',
                'answer_6.required' => 'Pertanyan keenam wajib diisi',
                'answer_7.required' => 'Pertanyan ketujuh wajib diisi',
                'answer_8.required' => 'Pertanyan kedelapan wajib diisi',
            ]
        );
        $a1 = 'Ya, saya sehat dalam 14 hari terakhir';
        $a3 = 'Tidak, saya tidak berkunjung ke rumah sakit';
        if ($data['answer_1'] == $a1 && $data['answer_2'] == 'Tidak' && $data['answer_3'] == $a3 && $data['answer_4'] == 'Tidak' && $data['answer_5'] == 'Tidak' && $data['answer_6'] == 'Tidak' && $data['answer_7'] == 'Ya' && $data['answer_8'] == 'Ya') {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Success';
        } else {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Failed';
        }
        Registrants::create($data);

    }

    public function result()
    {
        return view('user.result');
    }
}
