<?php

/**
 *
 */

namespace Solarium\QueryType\Luke;
use Solarium\Core\Query\ResponseParser as ResponseParserAbstract;
use Solarium\Core\Query\ResponseParserInterface as ResponseParserInterface;

/**
 * Parse Luke response data
 */
class ResponseParser extends ResponseParserAbstract implements ResponseParserInterface
{
    /**
     * Implements \Solarium\Core\Query\ResponseParserInterface::parse().
     */
    public function parse($result)
    {
        $data = $result->getData();

        $result = array();
        $result += $data['index'];
        $result += $data['info'];
        $result += $data['responseHeader'];

        return $this->addHeaderInfo($data, $result);
    }
}
