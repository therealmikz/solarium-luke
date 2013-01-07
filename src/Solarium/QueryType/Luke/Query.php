<?php

/**
 *
 */

namespace Solarium\QueryType\Luke;

use Solarium\Core\Query\Query as BaseQuery;

/**
 * Luke query
 *
 * Use a Luke query to get statistics about the Solr instance.
 */
class Query extends BaseQuery
{
    /**
     * Querytype luke
     */
    const QUERY_LUKE = 'luke';

    /**
     * Default options for the "Luke" query type.
     *
     * @var array
     */
    protected $options = array(
        'resultclass' => 'Solarium\QueryType\Luke\Result',
        'handler' => 'admin/luke',
    );

    /**
     * Implements \Solarium\Core\Query\QueryInterface::getType().
     */
    public function getType()
    {
        return self::QUERY_LUKE;
    }

    /**
     * Implements \Solarium\Core\Query\QueryInterface::getRequestBuilder().
     */
    public function getRequestBuilder()
    {
        return new RequestBuilder();
    }

    /**
     * Implements \Solarium\Core\Query\QueryInterface::getResponseParser().
     */
    public function getResponseParser()
    {
        return new ResponseParser();
    }
}
