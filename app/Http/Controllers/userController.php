<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

// use Faker\Factory;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        #Validate the request
        $this->validate($request, [
            'howManyUsers' => 'required|numeric|max:50|min:1',
        ]);

        #Generate user data with Faker package

        $howManyUsers = $request->input('howManyUsers');
        $add_birthday = $request->input('add_birthday');
        $add_address = $request->input('add_address');

        #Logic with Faker package

        $faker = \Faker\Factory::create();

        $data = '';

        for($i = 0; $i < $howManyUsers; $i++){

            if ($howManyUsers){
                $name= $faker->name;
            }

            if ($howManyUsers != 0){

                if($add_birthday){
                    $monthName= $faker->monthName($max = 'now');
                    $dayOfMonth= $faker->dayOfMonth($max = 'now');
                    // echo date("Y") - 20;
                    // $year=$faker->year($max = date("Y") - 20);
                    $year=$faker->year($max = '-18 years');
                    $birthday = $monthName . ' ' . $dayOfMonth . ' ' . $year;
                }
                else {
                    $birthday= NULL;
                }

            if ($howManyUsers != 0){
                if($add_address){
                    $streetAddress= $faker->streetAddress;
                }
                else{
                    $streetAddress= NULL;
                }
            }

            $data .= "\n" . $name . "\n" . $streetAddress . "\n" . $birthday . "\n";
        }
    }
    return view('layouts.userShow')->with('data',$data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
