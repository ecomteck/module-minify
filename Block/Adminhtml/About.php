<?php
/**
 * @category  Ecomteck
 * @package   Ecomteck_Minify
 * @author    Ecomteck
 * @copyright Copyright (c) Ecomteck (https://ecomteck.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License
 */

namespace Ecomteck\Minify\Block\Adminhtml;

use Magento\Framework\Data\Form\Element\AbstractElement;

class About extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @var \Ecomteck\Minify\Helper\Data
     */
    public $helper;
    
    /**
     * Constructor
     *
     * @param \Ecomteck\Minify\Helper\Data $helper
     */
    public function __construct(\Ecomteck\Minify\Helper\Data $helper)
    {
        $this->helper = $helper;
    }
    
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $version  = $this->helper->getExtensionVersion();
        $logopath = 'https://ecomteck.com/wp-content/uploads/2019/03/ecomteck-logo-split.png';
        $html     = <<<HTML
<div style="background: url('$logopath') no-repeat scroll 15px 15px #f8f8f8; 
border:1px solid #ccc; min-height:100px; margin:5px 0; 
padding:15px 15px 15px 140px;">
<p>
<strong>Ecomteck Minify Extension v$version</strong><br /><br />
Minify HTML including inline CSS and JS to speed up your site. Works with 
default Magento CSS/JS merger.
</p>
</div>
HTML;
        return $html;
    }
}
