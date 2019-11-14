<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';


class SingleRoom extends Room
{
    protected $roomNumber;
    protected $price;
    public function __construct(
        string $roomNumber,
        int $price
    ) {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->setBedCount(1);
        $this->setRoomType('Standard');
        $this->setHasBathroom(true);
        $this->setHasBalcony(false);
        $this->setExtras(['TV', 'Air-conditioneer']);
    }

}