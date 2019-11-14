<?php

namespace nfq;

require __DIR__ . '/../vendor/autoload.php';

class Room implements ReservableInterface
{
    protected $roomType;
    protected $hasBathroom;
    protected $hasBalcony;
    protected $bedCount;
    protected $roomNumber;
    protected $extras;
    protected $price;
    protected $reservations;

    public function __toString()
    {
        return 'Room type: ' . $this->getRoomType().
            '\n Has bathroom?: '. $this->isHasBathroom().
            '\n Has balcony?: '. $this->isHasBalcony().
            '\n Bed count: '. $this->getBedCount().
            '\n Room number: '.$this->getRoomNumber().
            '\n Extras'. implode(', ',$this->getExtras()).
            '\n Price'. $this->getPrice();
    }


    public function __construct(
        string $roomType,
        bool $hasBathroom,
        bool $hasBalcony,
        int $bedCount,
        string $roomNumber,
        array $extras,
        int $price,
        array $reservations
    ) {
        $this->roomType = $roomType;
        $this->hasBathroom = $hasBathroom;
        $this->hasBalcony = $hasBalcony;
        $this->bedCount = $bedCount;
        $this->roomNumber = $roomNumber;
        $this->extras = $extras;
        $this->price = $price;
        $this->reservations = $reservations;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
     */
    public function setReservations(array $reservations): void
    {
        $this->reservations = $reservations;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    public function setExtras(array $extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return string
     */
    public function getRoomNumber(): string
    {
        return $this->roomNumber;
    }

    /**
     * @param string $roomNumber
     */
    public function setRoomNumber(string $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount(int $bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return bool
     */
    public function isHasBathroom(): bool
    {
        return $this->hasBathroom;
    }

    /**
     * @param bool $hasBathroom
     */
    public function setHasBathroom(bool $hasBathroom): void
    {
        $this->hasBathroom = $hasBathroom;
    }

    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType(string $roomType): void
    {
        $this->roomType = $roomType;
    }

    public function removeReservation(Reservation $reservation)
    {
        // TODO: Implement removeReservation() method.
    }

    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    /**
     * @return bool
     */
    public function isHasBalcony(): bool
    {
        return $this->hasBalcony;
    }

    /**
     * @param bool $hasBalcony
     */
    public function setHasBalcony(bool $hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }
}