<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function showRegistrationForm()
    {
        return view('front.homepage');
    }

    public function handleRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $form = new Form();
        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->save();

        return "Success! Data saved.";
    }

    //use model for database operations

    public function add()
    {
        DB::table("form")->insert([
            "name" => "Seher Nur Şahin",
            "phone" => "08549861889",
            "email" => "seher@gmail.com"
        ]);
    }

    public function delete()
    {
        DB::table('form')->where("id", 8)->delete();
        DB::table('form')->where("id", 9)->delete();
    }

    public function update()
    {
        DB::table('form')->where("id", 2)->update([
            "name" => "Halil Erdem",
        ]);
    }

    public function listOfDatabase()
    {
        $data = DB::table('form')->get();
        return $data;
    }

    //use model for database operations

    public function add_useModel()
    {
        form::create([
            "name" => "Nevra Alcalı",
            "phone" => "08549861889",
            "email" => "nevra@gmail.com"
        ]);
        form::create([
            "name" => "Nevra Alcalı",
            "phone" => "08549861889",
            "email" => "nevra@gmail.com"
        ]);
        form::create([
            "name" => "Nevra Alcalı",
            "phone" => "08549861889",
            "email" => "nevra@gmail.com"
        ]);
    }

    public function delete_useModel()
    {
        form::whereId(16)->delete();
    }


    public function update_useModel()
    {
        form::whereId(15)->update([
            "name" => "Seden Alcalı",
            "phone" => "08549861889",
            "email" => "Seden@gmail.com"
        ]);
    }

    public function find_useModel()
    {
        $persondata = form::find(1);
        return $persondata;
    }
}
