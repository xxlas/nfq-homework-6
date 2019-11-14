<?php


namespace nfq;
require __DIR__ . '/../vendor/autoload.php';


class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $room->addReservation($reservation);

        echo
            'Room <strong>' . $room->getRoomNumber() . '</strong> successfully booked for <strong>' . $reservation->getGuest() . '</strong> from <time>' . $reservation->getStartDate()->format('Y-m-d') .
            '</time> to <time>' . $reservation->getEndDate()->format('Y-m-d') . '</time>!';
    }
}