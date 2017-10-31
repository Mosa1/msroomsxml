<?php
/**
 *
 * Created by PhpStorm.
 * User: salmah
 * Date: 1/21/16
 * Time: 10:08 PM
 */

namespace SalmaAbdelhady\RoomsXML\Model;


use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Hotel stay details sent to RoomsXML on search
 * @XmlRoot(name="HotelStayDetails")
 */
class HotelStayDetails
{
    /**
     * @var arrivalDate tag
     * @XmlElement(cdata=false)
     * @SerializedName("ArrivalDate")
     * @Type(name="DateTime<'Y-m-d'>")
     */
    private $ArrivalDate;

    /**
     * @var hotel stay details nights tag
     * @XmlElement(cdata=false)
     * @Type(name="integer")
     * @SerializedName("Nights")
     */
    private $Nights;
    
    /**
     * @var Nationality tag
     * @XmlElement(cdata=false)
     * @Type(name="string")
     * @SerializedName("Nationality")
     *
     */
    private $Nationality;

    /**
     * @var Rooms tag
     * @XmlElement(cdata=false)
     * @Type(name="array<SalmaAbdelhady\RoomsXML\Model\Room>")
     * @XmlList(inline = true, entry = "Room")
     * @SerializedName("Room")
     */
    private $Rooms;

    /**
     * HotelStayDetails constructor.
     */
    public function __construct()
    {
        $this->Rooms = new ArrayCollection();
    }

    /**
     * get Arrival date
     *
     * @return \DateTime<'Y-m-d'>
     */
    public function getArrivalDate()
    {
        return $this->ArrivalDate;
    }

    /**
     * Set Arrival date
     *
     * @param DateTime<'Y-m-d'> $ArrivalDate
     */
    public function setArrivalDate($ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate;
    }

    /**
     * Return nights
     *
     * @return integer
     */
    public function getNights()
    {
        return $this->Nights;
    }

    /**
     * Set nights
     *
     * @param integer $Nights
     */
    public function setNights($Nights)
    {
        $this->Nights = $Nights;
    }

    /**
     * Return customer nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->Nationality;
    }

    /**
     * Set customer nationality
     *
     * @param string $Nationality
     */
    public function setNationality($Nationality)
    {
        $this->Nationality = $Nationality;
    }

    /**
     * Return hotel details rooms
     *
     * @return ArrayCollection
     */
    public function getRooms()
    {
        return $this->Rooms;
    }

    /**
     * 
     * Set Rooms tag
     * 
     * @param ArrayCollection $Rooms
     */
    public function setRooms($Rooms)
    {
        $this->Rooms = $Rooms;
    }

    /**
     * Add room to Rooms tag
     * 
     * @param Room $room
     */
    public function addRoom(Room $room)
    {
        $this->Rooms->add($room);
    }
}