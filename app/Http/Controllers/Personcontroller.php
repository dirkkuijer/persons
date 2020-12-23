<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;
use App\Models\Person;

class Personcontroller extends Controller
{
    /**
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    public function index(): PersonResource
    {
        return new PersonResource(Person::paginate());
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'country'       => 'required',
        ]);

        $person = Person::create($request->all());
        return new PersonResource($person);
    }
    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
