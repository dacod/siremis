<?PHP
/**
 * PHPOpenBiz Framework
 *
 * LICENSE
 *
 * This source file is subject to the BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * @package   openbiz.bin.easy.element
 * @copyright Copyright &copy; 2005-2009, Rocky Swen
 * @license   http://www.opensource.org/licenses/bsd-license.php
 * @link      http://www.phpopenbiz.org/
 * @version   $Id$
 */

include_once("InputElement.php");

/**
 * ResetButton class is element for render html reset button
 *
 * @package openbiz.bin.easy.element
 * @author Rocky Swen
 * @copyright Copyright (c) 2005-2009
 * @access public
 */
class ResetButton extends InputElement
{
   
   /**
    * Render, draw the element according to the mode
    *
    * @return string HTML text
    */
    public function render()
    {
        $disabledStr = ($this->getEnabled() == "N") ? "DISABLED=\"true\"" : "";
        $style = $this->getStyle();
        $func = $this->getFunction();
        $sHTML .= "<INPUT TYPE=RESET NAME='$this->m_Name' ID=\"" . $this->m_Name ."\" VALUE='$this->m_Text' $disabledStr $this->m_HTMLAttr $style $func />";
        return $sHTML;
    }
}

?>
