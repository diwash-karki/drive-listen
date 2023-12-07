<?php

/* class to get video data */

class Video
{
    private $country;
    private $city;
    private $author;
    private $originalUrl;
    private $localUrl;

    public function __construct($country, $city, $author, $originalUrl, $localUrl)
    /* constructor to get json data */
    {
        $this->country = $country;
        $this->city = $city;
        $this->author = $author;
        $this->originalUrl = $originalUrl;
        $this->localUrl = $localUrl;
    }

    public function getCountry()
    {
        /* function to get country */
        return $this->country;
    }

    public function getCity()
    {
        /* function to get city */
        return $this->city;
    }

    public function getAuthor()
    {
        /* function to get author */
        return $this->author;
    }

    public function getOriginalUrl()
    {
        /* function to get originalUrl */
        return $this->originalUrl;
    }

    public function getLocalUrl()
    {
        /* function to get localUrl */
        return $this->localUrl;
    }

    public function videoArrays()
    {
        /* function to get all data */
        $videoArray = array(
            "country" => $this->country,
            "city" => $this->city,
            "author" => $this->author,
            "originalUrl" => $this->originalUrl,
            "localUrl" => $this->localUrl
        );
        return $videoArray;
    }
}
