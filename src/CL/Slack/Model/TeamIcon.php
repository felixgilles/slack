<?php

namespace CL\Slack\Model;

class TeamIcon extends AbstractModel
{
    /**
     * @var string|null
     */
    private $image34;

    /**
     * @var string|null
     */
    private $image44;

    /**
     * @var string|null
     */
    private $image68;

    /**
     * @var string|null
     */
    private $image88;

    /**
     * @var string|null
     */
    private $image102;

    /**
     * @var string|null
     */
    private $image132;

    /**
     * @var string
     */
    private $imageOriginal;

    /**
     * @return string|null
     */
    public function getImage132()
    {
        return $this->image132;
    }

    /**
     * @return string|null
     */
    public function getImage102()
    {
        return $this->image102;
    }

    /**
     * @return string|null
     */
    public function getImage34()
    {
        return $this->image34;
    }

    /**
     * @return string|null
     */
    public function getImage44()
    {
        return $this->image44;
    }

    /**
     * @return string|null
     */
    public function getImage68()
    {
        return $this->image68;
    }

    /**
     * @return string|null
     */
    public function getImage88()
    {
        return $this->image88;
    }

    /**
     * @return string
     */
    public function getImageOriginal()
    {
        return $this->imageOriginal;
    }
}
