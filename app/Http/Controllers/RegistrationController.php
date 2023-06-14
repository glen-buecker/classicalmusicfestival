<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Inertia\Inertia;

class RegistrationController
{
    public function index()
    {
        // User is returned in  $page.props.auth.user
        $props = collect();

        // sdd festival active status and year
       $props->put('festival_active', env('FESTIVAL_ACTIVE'));
        $props->put('festival_year', env('FESTIVAL_YEAR'));

        // Does the User have an existing registration? If so, retrieve it and attach as page pro
        // first() retrieves the first record matching user_id; get() retrieves all records
        $props->put('registration', Registration::where('user_id', auth()->user()->getAuthIdentifier() )->first() );

        // Get list of countries
        $props->put('countries',  $this->getList('countries'));

        return Inertia::render('CMF/Registration/Show', $props);
    }

    const countryStateCityApiKey = 'X-CSCAPI-KEY: ' . 'MlBRM3J5ZGF1TEJOSHZhSld2R3NTWmVHbTJNeHdUMldJU2haQ3RjSQ==';
    private function getList($search)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.countrystatecity.in/v1/' . $search,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                self::countryStateCityApiKey
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response); // returns an Object
    }

     //
    // Get country details
    //
    private function getCountryDetails($countryIso2)
    {

        // $search = countries/$countryIso2
    }

    //
    // Get states by country
    //
    private function getStates($countryIso2)
    {

        // $search = countries/$countryIso2/states
    }

    //
    // Get cities by state and country
    private function getCities($countryIso2, $stateIso2)
    {
        // $search = countries/$countryIso2/states/$stateIso2
    }
}
