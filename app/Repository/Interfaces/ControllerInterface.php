<?php

namespace App\Repository\Interfaces;

use App\Repository\Administration\CountryRepository;

interface ControllerInterface {

    /**
     * ControllerInterface constructor.
     * @param CountryRepository $countryRepository
     */
    public function __construct(CountryRepository $countryRepository);
}
