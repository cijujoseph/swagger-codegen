<?php

namespace App\Handler;

use Articus\PathHandler\Operation;
use Articus\PathHandler\Annotation as PHA;
use Articus\PathHandler\Consumer as PHConsumer;
use Articus\PathHandler\Producer as PHProducer;
use Articus\PathHandler\Attribute as PHAttribute;
use Articus\PathHandler\Exception as PHException;
use Psr\Http\Message\ServerRequestInterface;

/**
 * @PHA\Route(pattern="/fake/body-with-query-params")
 */
class FakeBodyWithQueryParams implements Operation\PutInterface
{
    /**
     * @PHA\Attribute(name=PHAttribute\Transfer::class, options={
     *     "type":\App\DTO\TestBodyWithQueryParamsQueryData::class,
     *     "objectAttr":"queryData",
     *     "source": PHAttribute\Transfer::SOURCE_GET
     * })
     * TODO check if consumer is valid, if it has correct priority and if it can be moved to class annotation
     * @PHA\Consumer(name=PHConsumer\Json::class, mediaType="application/json")
     * @PHA\Attribute(name=PHAttribute\Transfer::class, options={"type":\App\DTO\User::class,"objectAttr":"bodyData"})
     * @param ServerRequestInterface $request
     *
     * @throws PHException\HttpCode 500 if the method is not implemented
     */
    public function handlePut(ServerRequestInterface $request)
    {
        //TODO implement method
        /** @var \App\DTO\TestBodyWithQueryParamsQueryData $queryData */
        $queryData = $request->getAttribute("queryData");
        /** @var \App\DTO\User $bodyData */
        $bodyData = $request->getAttribute("bodyData");
        throw new PHException\HttpCode(500, "Not implemented");
    }
}
