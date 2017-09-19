<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (http://www.amasty.com)
 * @package Amasty_HelloWorld
 */
namespace Althea\StockStatus\Block;

class StockStatus extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{
    /**
     * @var \Magento\Framework\Data\Form\Element\Factory
     */
    protected $_elementFactory;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Data\Form\Element\Factory $elementFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Data\Form\Element\Factory $elementFactory,
        array $data = []
    )
    {
        $this->_elementFactory  = $elementFactory;
        parent::__construct($context,$data);
    }
    protected function _construct(){
        $this->addColumn('field1', ['label' => __('Name')]);
        $this->addColumn('field2', ['label' => __('SKU')]);
        $this->addColumn('field3', ['label' => __('Total Qty')]);
        $this->addColumn('field4', ['label' => __('Available Qty')]);
        $this->addColumn('field5', ['label' => __('Qty in pending orders')]);
        $this->addColumn('field6', ['label' => __('Qty in processing orders')]);

        parent::_construct();
    }

}