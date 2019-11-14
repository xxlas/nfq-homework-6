<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';


class Apartment extends Room
{
    private $roomNumber;
    private $price;

    public function __construct(string $roomNumber, int $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->setBedCount(4);
        $this->setRoomType('Diamond');
        $this->setHasBathroom(true);
        $this->setHasBalcony(false);
        $this->setExtras(['TV', 'Air-conditioner', 'Refrigerator', 'Kitchen box', 'Mini-bar', 'Bathtub', 'Wi-fi']);
    }
}