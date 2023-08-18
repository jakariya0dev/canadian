<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addNewUserData extends Controller
{
    function addNewProfile(Request $request){

        // dd($request);

        $arow = DB::table('user_profile')->insert([
            'sure_name' => $request['sure_name'],
            'name' => $request['name'],
            'o_name' => $request['o_name'],
            'gender' => $request['gender'],
            'm_status' => $request['m_status'],
            'religion' => $request['religion'],
            'dob' => $request['dob'],
            'pob' => $request['pob'],
            'cob' => $request['cob'],
            'nid' => $request['nid'],
            'education' => $request['education'],
            'visibility' => $request['visibility'],
            'c_nation' => $request['c_nation'],
            'n_type' => $request['n_type'],
            'o_nation' => $request['o_nation'],

            'pass_no' => $request['pass_no'],
            'pass_doi' => $request['pass_doi'],
            'pass_poi' => $request['pass_poi'],
            'pass_doe' => $request['pass_doe'],
            'op_no' => $request['op_no'],
            'op_doi' => $request['op_doi'],
            'op_poi' => $request['op_poi'],
            'op_doe' => $request['op_doe'],

            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'pre_address' => $request['pre_address'],
            'per_address' => $request['per_address'],
            
            'f_name' => $request['f_name'],
            'f_nation' => $request['f_nation'],
            'f_cob' => $request['f_cob'],
            'm_name' => $request['m_name'],
            'm_nation' => $request['m_nation'],
            'm_cob' => $request['m_cob'],
            's_name' => $request['s_name'],
            's_nation' => $request['s_nation'],
            's_cob' => $request['s_cob'],

            'tov' => $request['tov'],
            'noe' => $request['noe'],
            'pov' => $request['pov'],
            'poa' => $request['poa'],
            'poe' => $request['poe'],
            'status' => $request['status'],
            'password' => Str::random(10),
            // 'password' => $request['password'],
        ]);

        dd($arow);

    }
}