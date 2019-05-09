<?php
/**
 * A document possibly holding an extref, and only an extref
 */

namespace Graviton\DocumentBase;

/**
 * @author   List of contributors <https://github.com/libgraviton/document-base/graphs/contributors>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://swisscom.ch
 */
interface ExtRefHoldingDocumentInterface
{
    /**
     * if this document has only a property 'ref' and that one is empty (ie null)
     *
     * @return boolean
     */
    public function isEmptyExtRefObject();
}
