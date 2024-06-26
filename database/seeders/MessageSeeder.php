<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\MessageGlobal;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class MessageSeeder extends Seeder
{



    public function run() : void
    {



        // 1: local



        // :: root
        $messages = Storage::disk('public')->get('sources/messages.json');
        $messages = json_decode($messages, true);


        for ($i = 0; $i < count($messages); $i++) {
            Message::create([
                'type' => $messages[$i]['type'],
                'isFor' => $messages[$i]['isFor'],
                'content' => $messages[$i]['content'],
                'contentAr' => $messages[$i]['contentAr'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        } // end loop







        // ------------------------------------------------------------------
        // ------------------------------------------------------------------



        // 2: global



        // :: root
        $messages = Storage::disk('public')->get('sources/messages-global.json');
        $messages = json_decode($messages, true);


        for ($i = 0; $i < count($messages); $i++) {
            MessageGlobal::create([
                'type' => $messages[$i]['type'],
                'isFor' => $messages[$i]['isFor'],
                'target' => $messages[$i]['target'],
                'content' => $messages[$i]['content'],
                'contentAr' => $messages[$i]['contentAr'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        } // end loop





    } // end function




} // end seeder



