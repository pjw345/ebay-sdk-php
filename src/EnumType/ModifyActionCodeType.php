<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModifyActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the values that can be used when adding, modiying, or deleting a shipping discount profile (through the <b>ModifyActionCode</b> field in <b>SetShippingDiscountProfiles</b>), or when adding, modiying, or
 * deleting a promotional sale (through the <b>Action</b> field in <b>SetPromotionalSale</b>), or when adding or removing one or more listings from the promotional sale (through the <b>Action</b> field in <b>SetPromotionalSaleListings</b>). <br/><br/>
 * For <b>SetPromotionalSaleListings</b>, the specified action ('Add' or 'Delete') will apply to all listings specified in the <b>PromotionalSaleItemIDArray</b> container. A promotional sale can also be applied to all listings of a specified category
 * (using <b>CategoryID</b> in the <b>SetPromotionalSaleListings</b> request). However, an entire category of listings cannot be removed from a promotional sale. In other words, the <b>Action </b> field cannot be set to 'Delete' if a <b>CategoryID</b>
 * is specified.
 * @subpackage Enumerations
 */
class ModifyActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * Meta information extracted from the WSDL
     * - documentation: For <b>SetPromotionalSale</b>, this value is used in the request to create a new promotional sale. <br/><br/> For <b>SetPromotionalSaleListings</b>, this value is used in the request to apply an existing promotional sale to one or
     * more active items or to an entire category of active items. <br/><br/> For <b>SetShippingDiscountProfiles</b>, this value is used in the request to create a new shipping discount profile.
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: For <b>SetPromotionalSale</b>, this value is used in the request to delete an existing promotional sale. <br/><br/> For <b>SetPromotionalSaleListings</b>, this value is used in the request to remove one or more active items from an
     * existing promotional sale. This value cannot be used if a <b>CategoryID</b> is specified in the request. <br/><br/> For <b>SetShippingDiscountProfiles</b>, this value is used in the request to delete an existing shipping discount profile.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Update'
     * Meta information extracted from the WSDL
     * - documentation: For <b>SetPromotionalSale</b>, this value is used in the request to modify an existing promotional sale. <br/><br/> For <b>SetShippingDiscountProfiles</b>, this value is used in the request to modify an existing shipping discount
     * profile.
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_DELETE,
            self::VALUE_UPDATE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
