<?php


namespace SalmaAbdelhady\RoomsXML\Results;

/**
 * Created by PhpStorm.
 * User: salmah
 * Date: 1/30/16
 * Time: 8:53 PM
 */
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use SalmaAbdelhady\RoomsXML\RoomsXMLResponse;

/**
 * Class AvailabilitySearchResult
 * @XmlRoot(name="AvailabilitySearchResult")
 */
class AvailabilitySearchResult  extends RoomsXMLResponse
{


    /**
     * @XmlList(inline=true,entry="HotelAvailability")
     * @XmlElement(cdata=false)
     * @Type(name="array<SalmaAbdelhady\RoomsXML\Model\HotelAvailability>")
     * @SerializedName("HotelAvailability")
     */
    protected $hotelAvailability;


    /**
     * @return mixed
     */
    public function getHotelAvailability()
    {
        return $this->hotelAvailability;
    }

    /**
     * @param mixed $hotelAvailability
     */
    public function setHotelAvailability($hotelAvailability)
    {
        $this->hotelAvailability = $hotelAvailability;
    }
}