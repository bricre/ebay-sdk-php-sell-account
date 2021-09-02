<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container specifying a payment method that is accepted by the seller. Specify
 * multiple payment methods by repeating this container. For more on payment
 * methods, see Accepted payments policy. Note that payment methods are not
 * applicable to classified ad listings &ndash; all classified ad payments are
 * handled off of the eBay platform.
 */
class PaymentMethod extends AbstractModel
{
    /**
     * It's important to note that the credit card brands Visa and MasterCard must both
     * be listed if either one is listed, as is shown in the following code fragment:
     * &quot;paymentMethods&quot;: [{ &quot;brands&quot;: [VISA, MASTERCARD] }] ...
     * Note: Different eBay marketplaces may or may not support this field. Use the
     * Trading API GetCategoryFeatures call with FeatureID set to PaymentMethods and
     * DetailLevel set to ReturnAll to see what credit card brands different
     * marketplaces support. If the GetCategoryFeatures call returns details on credit
     * card brands for the categories in which you sell, then you can use this field to
     * list the credit card brands the seller accepts. If, on the other hand,
     * GetCategoryFeatures does not enumerate credit card brands for your target site
     * (for example, if it returns PaymentMethod set to CCAccepted), then you cannot
     * enumerate specific credit card brands with this field for that marketplace.
     * Required if paymentMethodType is set to CREDIT_CARD. A list of credit card
     * brands accepted by the seller.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentInstrumentBrandEnum'>eBay
     *                   API documentation</a>[]
     */
    public $brands = null;

    /**
     * The payment method, selected from the supported payment method types. Use
     * GetCategoryFeatures in the Trading API to retrieve the payment methods allowed
     * for a category on a specific marketplace, as well as the default payment method
     * for that marketplace (review the SiteDefaults.PaymentMethod field). For example,
     * the response from GetCategoryFeatures shows that on the US marketplace, most
     * categories allow only electronic payments via credit cards, PayPal, and the
     * like. Also, note that GeteBayDetails does not return payment method information.
     * Note: If you create item listings using the Inventory API, you must set this
     * field to PAYPAL (currently, the Inventory API supports only fixed-prince GTC
     * items where the only supported paymentMethod is PayPal). For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethodType = null;

    /**
     * This field contains information that eBay uses to identify the recipient's
     * account to which electronic funds are sent and must contain the email address
     * associated with the PayPal account selected by the seller. eBay uses this
     * information to identify the correct PayPal account when the buyer pays for an
     * order using PayPal. (Because it's possible to have more than a single PayPal
     * account, eBay cannot rely on account data returned by GetUser for determining
     * the correct PayPal eddress.) Required if the payment method is set to PAYPAL.
     *
     * @var \Ebay\Sell\Account\Model\RecipientAccountReference
     */
    public $recipientAccountReference = null;
}
