<?php

namespace DylanGD\FullCalendarBundle\Service;

use DylanGD\FullCalendarBundle\Model\FullCalendarEvent;

class Serializer implements SerializerInterface
{
    /**
     * @param FullCalendarEvent[] $events
     *
     * @return string json
     */
    public function serialize(array $events)
    {
        $result = [];

        foreach ($events as $event) {
            $result[] = $event->toArray();
        }

        return json_encode($result);
    }
}
