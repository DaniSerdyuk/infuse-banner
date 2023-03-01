<?php
namespace App\Exceptions;

use RuntimeException;
use Throwable;

class ImageNotFound extends RuntimeException
{
    /**
     * ImageNotFound constructor.
     *
     * @param string         $filePath
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $filePath, $code = 0, Throwable $previous = null)
    {
        $message = sprintf('Image not found. [%s]', $filePath);

        parent::__construct($message, $code, $previous);
    }
}
