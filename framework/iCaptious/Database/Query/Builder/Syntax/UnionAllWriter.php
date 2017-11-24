<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/12/14
 * Time: 7:15 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iCaptious\Database\Query\Builder\Syntax;

use iCaptious\Database\Query\Manipulation\UnionAll;

/**
 * Class UnionAllWriter.
 */
class UnionAllWriter extends AbstractSetWriter
{
    /**
     * @param UnionAll $unionAll
     *
     * @return string
     */
    public function write(UnionAll $unionAll)
    {
        return $this->abstractWrite($unionAll, 'getUnions', UnionAll::UNION_ALL);
    }
}
