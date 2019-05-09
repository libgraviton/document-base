<?php
/**
 * Interface for autoregistrable bundles.
 */

namespace Graviton\DocumentBase;

/**
 * @author   List of contributors <https://github.com/libgraviton/document-base/graphs/contributors>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://swisscom.ch
 */
interface GravitonBundleInterface
{
    /**
     * return array of new bunde instances
     *
     * @return \Symfony\Component\HttpKernel\Bundle\Bundle[]
     */
    public function getBundles();
}
