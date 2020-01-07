<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ASQPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ASQPreferences</b> container to allow the seller to add custom Ask Seller a Question (ASQ) subjects to item listings, or to reset the custom subjects to the default eBay values.
 * @subpackage Structs
 */
class ASQPreferencesType extends AbstractStructBase
{
    /**
     * The ResetDefaultSubjects
     * Meta information extracted from the WSDL
     * - documentation: This boolean field can be used in the <b>SetMessagePreferences</b> call to reset all custom Ask Seller a Question (ASQ) subjects to their default eBay values. For any given <b>SetMessagePreferences</b> call, either
     * <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call.
     * - minOccurs: 0
     * @var bool
     */
    public $ResetDefaultSubjects;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings. <br><br> For
     * any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in
     * to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind. <br><br> Note that the default ASQ subjects will display in the site's language if retrieved from a site other than the
     * seller's own. For example, if a US seller sells on the German and French sites, the default subjects will display in German and French, respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will
     * display in the seller's own language - English in this use case. <br><br> The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the
     * eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Subject;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ASQPreferencesType
     * @uses ASQPreferencesType::setResetDefaultSubjects()
     * @uses ASQPreferencesType::setSubject()
     * @uses ASQPreferencesType::setAny()
     * @param bool $resetDefaultSubjects
     * @param string[] $subject
     * @param \DOMDocument $any
     */
    public function __construct($resetDefaultSubjects = null, array $subject = array(), \DOMDocument $any = null)
    {
        $this
            ->setResetDefaultSubjects($resetDefaultSubjects)
            ->setSubject($subject)
            ->setAny($any);
    }
    /**
     * Get ResetDefaultSubjects value
     * @return bool|null
     */
    public function getResetDefaultSubjects()
    {
        return $this->ResetDefaultSubjects;
    }
    /**
     * Set ResetDefaultSubjects value
     * @param bool $resetDefaultSubjects
     * @return \StructType\ASQPreferencesType
     */
    public function setResetDefaultSubjects($resetDefaultSubjects = null)
    {
        // validation for constraint: boolean
        if (!is_null($resetDefaultSubjects) && !is_bool($resetDefaultSubjects)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resetDefaultSubjects, true), gettype($resetDefaultSubjects)), __LINE__);
        }
        $this->ResetDefaultSubjects = $resetDefaultSubjects;
        return $this;
    }
    /**
     * Get Subject value
     * @return string[]|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * This method is responsible for validating the values passed to the setSubject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubject method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubjectForArrayConstraintsFromSetSubject(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $aSQPreferencesTypeSubjectItem) {
            // validation for constraint: itemType
            if (!is_string($aSQPreferencesTypeSubjectItem)) {
                $invalidValues[] = is_object($aSQPreferencesTypeSubjectItem) ? get_class($aSQPreferencesTypeSubjectItem) : sprintf('%s(%s)', gettype($aSQPreferencesTypeSubjectItem), var_export($aSQPreferencesTypeSubjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subject property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subject value
     * @throws \InvalidArgumentException
     * @param string[] $subject
     * @return \StructType\ASQPreferencesType
     */
    public function setSubject(array $subject = array())
    {
        // validation for constraint: array
        if ('' !== ($subjectArrayErrorMessage = self::validateSubjectForArrayConstraintsFromSetSubject($subject))) {
            throw new \InvalidArgumentException($subjectArrayErrorMessage, __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Add item to Subject value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ASQPreferencesType
     */
    public function addToSubject($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Subject property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subject[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\ASQPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ASQPreferencesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
