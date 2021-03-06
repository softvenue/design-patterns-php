<?php

namespace Patterns\Behavioral\State;

use Patterns\Behavioral\State\Mutators\StateInterface;

class Article
{

    /**
     * $state
     *
     * @var StateInterface
     */
    protected $state;

    /**
     *
     * @param   StateInterface  $state  state object
     *
     */
    public function __construct(StateInterface $state)
    {
        $this->setStatus($state);
    }

    /**
     * [setStatus description]
     *
     * @param   StateInterface  $state  state object
     *
     * @return  void
     */

    public function setStatus(StateInterface $state)
    {
        $this->state = $state;
    }
    /**
     * getStatus - get the current status]
     *
     * @return  string  the current status
     */
    public function getStatus()
    {
        return $this->state->status();
    }
}
