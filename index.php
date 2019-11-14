<?php

require __DIR__ . '/vendor/autoload.php';

use nfq\BookingManager;
use nfq\Guest;
use nfq\Reservation;
use nfq\SingleRoom;

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');

$startDate = new DateTime('2019-04-20');
$endDate = new DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room, $reservation);
