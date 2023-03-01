<?php
namespace App;

use App\Exceptions\ImageNotFound;
use App\Handlers\DatabaseHandler;
use App\Handlers\ImageHandler;

class BannerApplication
{
    /** @var array $payload */
    private array $payload = [];

    /**
     * Application constructor.
     *
     * @param array $payload
     */
    public function __construct(array $payload)
    {
        $this->preparePayload($payload);
    }

    /**
     * @param array $payload
     */
    private function preparePayload(array $payload)
    {
        $this->payload = [
            'user_agent' => $payload['HTTP_USER_AGENT'],
            'ip_address' => $payload['REMOTE_ADDR'],
            'view_date'  => date('Y-m-d H:i:s'),
            'page_url'   => $payload['HTTP_REFERER'],
        ];
    }

    /**
     * @return $this
     */
    public function saveStatistic(): self
    {
        (new DatabaseHandler())->save($this->payload);

        return $this;
    }

    /**
     * @throws ImageNotFound
     *
     * @return string
     */
    public function getImage(): string
    {
        return (new ImageHandler())->findImage();
    }
}
