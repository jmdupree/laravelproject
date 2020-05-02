<?php

namespace App\Observers;

use App\Models\Hotel;

class HotelObserver
{
    /**
     * Handle the hotel "created" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function created(Hotel $hotel)
    {
        //
    }

  public function creating(Hotel $hotel)
    {
    $api_key = 'c81348e373cf75b39674b30ffad94872';
    $endpoint = 'http://api.positionstack.com/v1/forward';

        $street= '';
        $city= '';
        $state= '';
        $zip= '';
        $hotel->$street;
        $hotel->$city;
        $hotel->$state;
        $hotel->$zip;

    $params = array(
        'access_key' => $api_key,
        'query' => "$street $city, $state $zip"
    );

    $query_string = http_build_query($params);

    $json = file_get_contents($endpoint."?".$query_string);

    $data = json_decode($json);

    $data = $data->data[0];

    echo "<pre>";
    print_r($data);
    echo "</pre>\n";

    $latitude = $data->latitude;
    $longitude = $data->longitude;

    echo $latitude. " ".$longitude;

    }

    public function saving(Hotel $hotel)
{

	$hotel->lat = latitude;
	$hotel-> lon = longitude;


}

    /**
     * Handle the hotel "updated" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function updated(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function deleted(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "restored" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function restored(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "force deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function forceDeleted(Hotel $hotel)
    {
        //
    }
}
