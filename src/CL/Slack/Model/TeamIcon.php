<?php

namespace CL\Slack\Model;

class TeamIcon extends AbstractModel
{
    /**
     * @var string|null
     */
    private $image_34;

    /**
     * @var string|null
     */
    private $image_44;

    /**
     * @var string|null
     */
    private $image_68;

    /**
     * @var string|null
     */
    private $image_88;

    /**
     * @var string|null
     */
    private $image_102;

    /**
     * @var string|null
     */
    private $image_132;

    /**
     * @var string
     */
    private $image_orignal;

    /**
     * @return string|null
     */
    public function getImage132()
    {
        return $this->image_132;
    }

    /**
     * @return string|null
     */
    public function getImage102()
    {
        return $this->image_102;
    }

    /**
     * @return string|null
     */
    public function getImage34()
    {
        return $this->image_34;
    }

    /**
     * @return string|null
     */
    public function getImage44()
    {
        return $this->image_44;
    }

    /**
     * @return string|null
     */
    public function getImage68()
    {
        return $this->image_68;
    }

    /**
     * @return string|null
     */
    public function getImage88()
    {
        return $this->image_88;
    }

    /**
     * @return string
     */
    public function getImageOriginal()
    {
        return $this->image_orignal;
    }
}
