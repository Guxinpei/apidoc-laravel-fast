<?php
namespace ApiDocLaravelFast\Core\Api;


use ApiDocLaravelFast\Core\ApiContracts\ApiDoc;
use ApiDocLaravelFast\Core\ApiContracts\ApiResponseContract;
use Illuminate\Support\Collection;

class ApiResponse extends ApiParamCollect implements ApiResponseContract
{

    /**
     * @param string $responseName
     * @param string $responseType
     * @param int $responseCode
     * @param ApiDoc $responseDesc
     * @param Collection|null $params
     */
    public function __construct(
        public string $responseName = '',
        public string $responseType = '',
        public int $responseCode = 200,
        public ?ApiDoc $responseDesc = null,
        public ?Collection  $params = null,

    )
    {
       parent::__construct();
       if($this->responseDesc===null){
           $this->responseDesc = new \ApiDocLaravelFast\Core\Api\ApiDoc();
       }
    }

    public function getResponseName(): string
    {
        return $this->responseName;
    }

    public function getResponseType(): string
    {
        return $this->responseType;
    }

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function getResponseDesc(): ApiDoc
    {
        return $this->responseDesc;
    }

    public function getResponseData(): array
    {
        return $this->params->toArray();
    }


    public function setResponseName(string $responseName):self
    {
        $this->responseName = $responseName;
        return $this;
    }

    public function setResponseType(string $responseType):self
    {
        $this->responseType = $responseType;
        return $this;
    }

    public function setResponseCode(int $responseCode):self
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    public function setResponseDesc(ApiDoc $responseDesc):self
    {
        $this->responseDesc = $responseDesc;
        return $this;
    }

    public function setResponseData(array $responseData):self
    {
        $this->params = new Collection($responseData);
        return $this;
    }
}