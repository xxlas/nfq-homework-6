<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';


interface ReservableInterface
{
    public function addReservation(Reservation $reservation);

    public function removeReservation(Reservation $reservation);
}