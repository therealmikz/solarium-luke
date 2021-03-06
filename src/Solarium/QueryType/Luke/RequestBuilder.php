<?php

/**
 *
 */

namespace Solarium\QueryType\Luke;

use Solarium\Core\Query\RequestBuilder as BaseRequestBuilder;
use Solarium\Core\Query\QueryInterface;

/**
 * Build a Luke request
 */
class RequestBuilder extends BaseRequestBuilder
{
    /**
     * Overrides \Solarium\Core\Query\RequestBuilder::build().
     */
    public function build(QueryInterface $query)
    {
        $request = parent::build($query);

        $request
          ->addParam('numTerms', 0)
          ->addParam('json.nl', 'map');

        //$request->setMethod(Request::METHOD_GET);
        return $request;
    }

}
