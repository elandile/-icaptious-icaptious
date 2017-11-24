<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/24/14
 * Time: 12:55 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iCaptious\Database\Query\Builder\Syntax;

use iCaptious\Database\Query\Builder\GenericBuilder;
use iCaptious\Database\Query\Syntax\QueryPartInterface;

/**
 * Class AbstractSetWriter.
 */
abstract class AbstractSetWriter
{
    /**
     * @var GenericBuilder
     */
    protected $writer;

    /**
     * @param GenericBuilder $writer
     */
    public function __construct(GenericBuilder $writer)
    {
        $this->writer = $writer;
    }

    /**
     * @param QueryPartInterface $setClass
     * @param string             $setOperation
     * @param $glue
     *
     * @return string
     */
    protected function abstractWrite(QueryPartInterface $setClass, $setOperation, $glue)
    {
        $selects = [];

        foreach ($setClass->$setOperation() as $select) {
            $selects[] = $this->writer->write($select);
        }

        return \implode("\n".$glue."\n", $selects);
    }
}
