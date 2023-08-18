<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_profile', function(Blueprint $table){
            $table->id();

            $table->text('sure_name');
            $table->text('name');
            $table->text('o_name');
            $table->text('gender');
            $table->text('m_status');
            $table->text('religion');
            $table->text('dob');
            $table->text('pob');
            $table->text('cob');
            $table->text('nid');
            $table->text('education');
            $table->text('visibility');
            $table->text('c_nation');
            $table->text('n_type');
            $table->text('o_nation');

            $table->text('pass_no');
            $table->text('pass_doi');
            $table->text('pass_poi');
            $table->text('pass_doe');
            $table->text('op_no');
            $table->text('op_doi');
            $table->text('op_poi');
            $table->text('op_doe');

            $table->text('phone');
            $table->text('mobile');
            $table->text('email');
            $table->text('pre_address');
            $table->text('per_address');
            
            $table->text('f_name');
            $table->text('f_nation');
            $table->text('f_cob');
            $table->text('m_name');
            $table->text('m_nation');
            $table->text('m_cob');
            $table->text('s_name');
            $table->text('s_nation');
            $table->text('s_cob');

            $table->text('tov');
            $table->text('noe');
            $table->text('pov');
            $table->text('poa');
            $table->text('poe');
            $table->text('status');
            $table->text('password');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
