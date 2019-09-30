<?php

class Dtn_Weblog_Block_Adminhtml_Blogpost_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('weblog_blogpost', array('legend' => Mage::helper('weblog')->__('Item information')));

        $fieldset->addField('title', 'text', array(
            'label' => Mage::helper('weblog')->__('Title'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'title',
        ));

        return parent::_prepareForm();
    }
}