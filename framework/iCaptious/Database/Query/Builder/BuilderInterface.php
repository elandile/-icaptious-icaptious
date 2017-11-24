<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 6/3/14
 * Time: 12:07 AM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iCaptious\Database\Query\Builder;

use iCaptious\Database\Query\Manipulation\QueryInterface;

/**
 * Interface BuilderInterface.
 */
interface BuilderInterface
{
    /**
     * @param QueryInterface $query
     *
     * @return string
     */
    public function write(QueryInterface $query);

    /**
     * @param QueryInterface $query
     *
     * @return string
     */
    public function writeFormatted(QueryInterface $query);
}
