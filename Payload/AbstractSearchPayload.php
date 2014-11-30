<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
abstract class AbstractSearchPayload extends AbstractPayload
{
    const SORT_SCORE = 'score';
    const SORT_TIMESTAMP = 'timestamp';

    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';

    /**
     * @var string
     */
    private $query = '';
    private $sort;
    private $sortDir;
    private $highlight;
    private $count;
    private $page;

    /**
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $highlight
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;
    }

    /**
     * @return mixed
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sortDir
     */
    public function setSortDir($sortDir)
    {
        $this->sortDir = $sortDir;
    }

    /**
     * @return mixed
     */
    public function getSortDir()
    {
        return $this->sortDir;
    }
}
