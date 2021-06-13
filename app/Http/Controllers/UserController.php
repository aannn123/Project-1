<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Registrants;
use App\Models\SeatChurch;
use App\Models\Worships;
use Illuminate\Http\Request;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $name = str_replace(' ','',$data['fullname']);
        $a1 = 'Ya, saya sehat dalam 14 hari terakhir';
        $a3 = 'Tidak, saya tidak berkunjung ke rumah sakit';
        if ($data['answer_1'] == $a1 && $data['answer_2'] == 'Tidak' && $data['answer_3'] == $a3 && $data['answer_4'] == 'Tidak' && $data['answer_5'] == 'Tidak' && $data['answer_6'] == 'Tidak' && $data['answer_7'] == 'Ya' && $data['answer_8'] == 'Ya') {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Success';
            $data['code'] = str_shuffle(mt_rand(100,1000).$name);
        } else {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Failed';
            $data['code'] = str_shuffle(mt_rand(100,1000).$name);
        }
        $user = Registrants::create($data);
        // var_dump($user['fullname']);die();
        return redirect()->route('seat', $user['code']);

    }

    public function result($name)
    {
        $regist = Registrants::where('code',$name)->with('worship','seat')->first();

        return view('user.result')->with([
            'data'=>$regist,
        ]);
    }

    public function seatSelection($name)
    {
        $data = Registrants::where('code', $name)->first();
        $seat = SeatChurch::where('churc_id', $data['church_id'])->get();
        $collection = collect($seat);
        $mainRoom = $collection->slice(0,102);
        $porch = $collection->slice(102,37);
        $balkon = $collection->slice(139,210);
        return view('user.seat')->with([
            'name' => $data['code'],
            'main' => $mainRoom,
            'porch' => $porch,
            'balkon' => $balkon,
        ]);
    }

    public function seatSelectionPost(Request $request, $name)
    {
        $data = Registrants::where('code', $name)->first();
        $seatId = $request->post('id');
        $seat = SeatChurch::where('id', $seatId)->first();
        $data['church_seat_id'] = $seatId;
        $seat['registrant_id'] = $data['id'];
        $seat->save();
        $data->save();

        return redirect()->route('regist.result', $data['code']);


    }
}
