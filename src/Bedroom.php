<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';


class Bedroom extends Room
{
    private $roomNumber;
    private $price;

    public function __construct(string $roomNumber, int $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->setBedCount(2);
        $this->setRoomType('Gold');
        $this->setHasBathroom(true);
        $this->setHasBalcony(true);
        $this->setExtras(['TV', 'Air-conditioneer', 'Refrigerator', 'Mini-bar', 'Bathtub']);
    }
}