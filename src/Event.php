<?php

namespace Katsana\Prefetch;

class Event implements Contracts\Command
{
    /**
     * Event name.
     *
     * @var string
     */
    protected $name;

    /**
     * Event data payload.
     *
     * @var \Katsana\Prefetch\Data
     */
    protected $data;

    /**
     * Construct a new EventCommand.
     */
    public function __construct(string $name, Data $data)
    {
        $this->name = $name;
        $this->data = $data;
    }

    /**
     * Convert message to SSE payload.
     */
    public function __toString()
    {
        return \sprintf("event: %s\n%s", $this->name, (string) $this->data);
    }
}
