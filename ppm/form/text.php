<?php

if (!class_exists('PPM_TextType'))
{
    class PPM_TextType extends PPM_FormType
    {
        public function render()
        {
            return $this->renderField([
                $this->getAttrType(),
                $this->getAttrName(),
                $this->getAttrId(),
                $this->getAttrClass(),
                $this->getAttrValue(),
                $this->getAttrPlaceholder(),
                $this->getAttrRequired(),
                $this->getAttrDisabled(),
                $this->getAttrMaxLength(),
                $this->getAttrReadonly()
            ]);
        }
    }
}
