<?php

namespace MrThito\Laravel;

use Mvdnbrk\DhlParcel\Client;

class DhlParcelClientAdapter
{
    /**
     * @var \MrThito\DhlParcel\Client
     */
    protected $client;

    /**
     * Construct a new api adapter instance.
     *
     * @param  \MrThito\DhlParcel\Client  $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->client->getAccountId();
    }

    /**
     * @param  string  $value
     * @return \MrThito\Laravel\DhlParcelClientAdapter
     */
    public function setAccountId(string $value)
    {
        $this->client->setAccountId($value);

        return $this;
    }

    /**
     * @param  string  $value
     * @return \MrThito\Laravel\DhlParcelClientAdapter
     */
    public function setApiKey(string $value)
    {
        $this->client->setApiKey($value);

        return $this;
    }

    /**
     * @param  string  $value
     * @return \MrThito\Laravel\DhlParcelClientAdapter
     */
    public function setUserId(string $value)
    {
        $this->client->setUserId($value);

        return $this;
    }

    /**
     * @return \MrThito\DhlParcel\Endpoints\Labels
     */
    public function labels()
    {
        return $this->client->labels;
    }

    /**
     * @return \MrThito\DhlParcel\Endpoints\Shipments
     */
    public function shipments()
    {
        return $this->client->shipments;
    }

    /**
     * @return \MrThito\DhlParcel\Endpoints\ServicePoints
     */
    public function servicePoints()
    {
        return $this->client->servicePoints;
    }

    /**
     * @return \MrThito\DhlParcel\Endpoints\TrackTrace
     */
    public function tracktrace()
    {
        return $this->client->tracktrace;
    }
}
