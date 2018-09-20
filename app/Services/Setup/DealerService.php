<?php

namespace App\Services\Setup;

use App\Models\Dealer;

class DealerService
{
    /**
     * @var Dealer
     */
    private $dealer;

    /**
     * DealerService constructor.
     * @param Dealer $dealer
     */
    public function __construct(Dealer $dealer)
    {
        $this->dealer = $dealer;
    }

    public function all()
    {
        $dealers = $this->dealer->orderBy('id', 'asc')->get();

        return $dealers;
    }

    public function getByLoggedInUser()
    {
        $dealers = \Auth::user()->dealer()->get();

        return $dealers;
    }
}