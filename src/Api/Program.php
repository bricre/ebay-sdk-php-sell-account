<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\Program as ProgramModel;
use Ebay\Sell\Account\Model\Programs as Programs;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Program extends AbstractAPI
{
    /**
     * This method gets a list of the seller programs that the seller has opted-in to.
     *
     * @return Programs
     */
    public function getOptedIns(): Programs
    {
        return $this->client->request('getOptedInPrograms', 'GET', 'program/get_opted_in_programs',
            [
            ]
        );
    }

    /**
     * This method opts the seller in to an eBay seller program. Refer to the Account
     * API overview for information about available eBay seller programs. Note: It can
     * take up to 24-hours for eBay to process your request to opt-in to a Seller
     * Program. Use the getOptedInPrograms call to check the status of your request
     * after the processing period has passed.
     *
     * @param ProgramModel $Model program being opted-in to
     *
     * @return object
     */
    public function optInTo(ProgramModel $Model): object
    {
        return $this->client->request('optInToProgram', 'POST', 'program/opt_in',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method opts the seller out of a seller program to which you have previously
     * opted-in to. Get a list of the seller programs you have opted-in to using the
     * getOptedInPrograms call.
     *
     * @param ProgramModel $Model program being opted-out of
     *
     * @return object
     */
    public function optOutOf(ProgramModel $Model): object
    {
        return $this->client->request('optOutOfProgram', 'POST', 'program/opt_out',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
