<?php

namespace App\Traits;

use App\Repository\Administration\CountryRepository;
use App\Repository\DistrictRepository;
use App\Repository\PrefectureRepository;
use App\Repository\QuartierRepository;
use App\Repository\RegionRepository;
use App\Repository\TownRepository;

trait Controllable {

    /**
     * @var CountryRepository
     */
    public $countryRepository;
    /**
     * @var RegionRepository
     */
    public $regionRepository;
    /**
     * @var PrefectureRepository
     */
    public $prefectureRepository;
    /**
     * @var TownRepository
     */
    public $townRepository;
    /**
     * @var DistrictRepository
     */
    public $districtRepository;
    /**
     * @var QuartierRepository
     */
    public $quartierRepository;


    /**
     * Controllable constructor.
     * @param CountryRepository $countryRepository
     * @param RegionRepository $regionRepository
     * @param PrefectureRepository $prefectureRepository
     * @param TownRepository $townRepository
     * @param DistrictRepository $districtRepository
     * @param QuartierRepository $quartierRepository
     */
    public function __construct(CountryRepository $countryRepository, RegionRepository $regionRepository, PrefectureRepository $prefectureRepository, TownRepository $townRepository, DistrictRepository $districtRepository, QuartierRepository $quartierRepository)
    {
        $this->countryRepository = $countryRepository;
        $this->regionRepository = $regionRepository;
        $this->prefectureRepository = $prefectureRepository;
        $this->townRepository = $townRepository;
        $this->districtRepository = $districtRepository;
        $this->quartierRepository = $quartierRepository;
        $this->middleware('auth');
    }
}
