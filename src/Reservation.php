<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';
use DateTime;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __toString()
    {
        return 'Reservation start date: '. (string)$this->getStartDate().
            '\n Reservation end date: '.(string)$this->getEndDate().
            '\n Guest: '. $this->getGuest();
    }


    /**
     * Reservation constructor.
     * @param $startDate
     * @param $endDate
     * @param $guest
     */
    public function __construct(DateTime $startDate, DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     */
    public function setEndDate(DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @param Guest $guest
     */
    public function setGuest(Guest $guest): void
    {
        $this->guest = $guest;
    }


}