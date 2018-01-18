<?php

namespace DylanGD\FullCalendarBundle\Service;

use DylanGD\FullCalendarBundle\Model\FullCalendarEvent;

interface SerializerInterface
{
    /**
     * @param FullCalendarEvent[] $events
     *
     * @return string json
     */
    public function serialize(array $events);
}
