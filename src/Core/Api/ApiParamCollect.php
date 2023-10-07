<?php
namespace ApiDocLaravelFast\Core\Api;

use ApiDocLaravelFast\Core\ApiContracts\ApiParamCollectContract;
use ApiDocLaravelFast\Core\ApiContracts\ApiParamContract;
use Illuminate\Support\Collection;

Class ApiParamCollect implements ApiParamCollectContract
{
    protected ?Collection $params = null;

    public function __construct(
    )
    {
        $this->params = new Collection();
    }

    public function getParams(): array
    {
        return $this->params->toArray();
    }

    public function addParam(ApiParamContract $apiParamContract): ApiParamCollectContract
    {
        $this->params->put($apiParamContract->getParamName(),$apiParamContract);
        return $this;
    }

    public function addParams(array $apiParamContracts): ApiParamCollectContract
    {
        foreach ($apiParamContracts as $apiParamContract) {
            $this->addParam($apiParamContract);
        }
        return $this;
    }

    public function getParam(string $key): ApiParamContract
    {
        return $this->params->firstWhere('paramName',$key);
    }

    public function hasParam(string $key): bool
    {
        return $this->params->contains('paramName',$key);
    }

    public function isEmpty(): bool
    {
        return $this->params->isEmpty();
    }

    public function getCollect():Collection
    {
        return $this->params;
    }
}