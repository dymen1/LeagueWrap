<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class SummonerByAccountId extends BaseEndpoint {
    protected $urlTemplate = '/lol/summoner/v4/summoners/by-account/{accountId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\SummonerDto::class;
    
    protected $returnsDtoArray = false;
}
