<?php

namespace ApiDocLaravelFast\Core\Api;

class ApiDoc implements \ApiDocLaravelFast\Core\ApiContracts\ApiDoc
{

    public function __construct(
        public string $type = 'string',
        public string $content = ''
    )
    {

    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setType(string $type):self
    {
        $this->type = $type;
        return $this;
    }

    public function setContent(string $content):self
    {
        $this->content = $content;
        return $this;
    }
}