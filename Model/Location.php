<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 01/12/16
 * Time: 10:46
 */

namespace Miky\Component\Location\Model;


class Location implements LocationInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $streetNumber;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $countryShortName;


    /**
     * @var string
     */
    protected $continent;

    /**
     * @var string
     */
    protected $continentShortName;

    /**
     * @var string
     */
    protected $formattedAddress;

    /**
     * @var string
     */
    protected $administrativeAreaLevel2;

    /**
     * @var string
     */
    protected $administrativeAreaLevel2Short;

    /**
     * @var string
     */
    protected $administrativeAreaLevel1;

    /**
     * @var string
     */
    protected $administrativeAreaLevel1Short;

    /**
     * @var string
     */
    protected $longitude;

    /**
     * @var string
     */
    protected $latitude;

    /**
     * @var string
     */
    protected $lonlat;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountryShortName()
    {
        return $this->countryShortName;
    }

    /**
     * @param string $countryShortName
     */
    public function setCountryShortName($countryShortName)
    {
        $this->countryShortName = $countryShortName;
    }

    /**
     * @return string
     */
    public function getAdministrativeAreaLevel2Short()
    {
        return $this->administrativeAreaLevel2Short;
    }

    /**
     * @param string $administrativeAreaLevel2Short
     */
    public function setAdministrativeAreaLevel2Short($administrativeAreaLevel2Short)
    {
        $this->administrativeAreaLevel2Short = $administrativeAreaLevel2Short;
    }

    /**
     * @return string
     */
    public function getAdministrativeAreaLevel1Short()
    {
        return $this->administrativeAreaLevel1Short;
    }

    /**
     * @param string $administrativeAreaLevel1Short
     */
    public function setAdministrativeAreaLevel1Short($administrativeAreaLevel1Short)
    {
        $this->administrativeAreaLevel1Short = $administrativeAreaLevel1Short;
    }


    /**
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param string $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

    /**
     * @return string
     */
    public function getContinentShortName()
    {
        return $this->continentShortName;
    }

    /**
     * @param string $continentShortName
     */
    public function setContinentShortName($continentShortName)
    {
        $this->continentShortName = $continentShortName;
    }

    /**
     * @return string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * @param string $formattedAddress
     */
    public function setFormattedAddress($formattedAddress)
    {
        $this->formattedAddress = $formattedAddress;
    }

    /**
     * @return string
     */
    public function getAdministrativeAreaLevel2()
    {
        return $this->administrativeAreaLevel2;
    }

    /**
     * @param string $administrativeAreaLevel2
     */
    public function setAdministrativeAreaLevel2($administrativeAreaLevel2)
    {
        $this->administrativeAreaLevel2 = $administrativeAreaLevel2;
    }

    /**
     * @return string
     */
    public function getAdministrativeAreaLevel1()
    {
        return $this->administrativeAreaLevel1;
    }

    /**
     * @param string $administrativeAreaLevel1
     */
    public function setAdministrativeAreaLevel1($administrativeAreaLevel1)
    {
        $this->administrativeAreaLevel1 = $administrativeAreaLevel1;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }




    /**
     * Return the location for Elasticsearch
     *
     * @return string
     */
    public function getLonlat()
    {
        $location = $this->getLatitude().','.$this->getLongitude();

        return $location;
    }

    /**
     * @param string $lonlat
     */
    public function setLonlat($lonlat)
    {
        $this->lonlat = $lonlat;
    }
}