<?php
require_once 'Video.class.php';

/* class to get database data */

class Database
{
    private $json;
    private $json_data;

    public function __construct()
    {
        /* constructor to get json data */
        $this->json = file_get_contents('database.json'); // reading json data
        $this->json_data = json_decode($this->json, true); // decoding json data
    }

    public function getJson()
    {
        /* function to get raw json */
        return $this->json;
    }

    public function getAllData()
    {
        /* function to get all data */
        return $this->json_data;
    }

    public function getDataByCountry($country)
    {
        /* function to get data by country */
        $data = array();
        foreach ($this->json_data as $key => $value) {
            if ($value['country'] == $country) {
                $data[] = $value;
            }
        }
        return $data;
    }
    

    public function getDataByCity($city)
    {
        /* function to get data by city */
        $data = array();
        foreach ($this->json_data as $key => $value) {
            if ($value['city'] == $city) {
                $data[] = $value;
            }
        }
        return $data;
    }
}
