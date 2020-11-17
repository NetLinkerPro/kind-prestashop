<?php
/**
 * Created by PhpStorm.
 * User: mfigueroa
 * Date: 06/10/2017
 * Time: 8:22
 */

namespace NetLinker\KindPrestaShop;

use NetLinker\KindPrestaShop\Lib\Addresses;
use NetLinker\KindPrestaShop\Lib\Carriers;
use NetLinker\KindPrestaShop\Lib\CartRules;
use NetLinker\KindPrestaShop\Lib\Carts;
use NetLinker\KindPrestaShop\Lib\Categories;
use NetLinker\KindPrestaShop\Lib\Combinations;
use NetLinker\KindPrestaShop\Lib\Configurations;
use NetLinker\KindPrestaShop\Lib\Contacts;
use NetLinker\KindPrestaShop\Lib\ContentManagementSystem;
use NetLinker\KindPrestaShop\Lib\Countries;
use NetLinker\KindPrestaShop\Lib\Currencies;
use NetLinker\KindPrestaShop\Lib\CustomerMessages;
use NetLinker\KindPrestaShop\Lib\Customers;
use NetLinker\KindPrestaShop\Lib\CustomerThreads;
use NetLinker\KindPrestaShop\Lib\Deliveries;
use NetLinker\KindPrestaShop\Lib\Employees;
use NetLinker\KindPrestaShop\Lib\Groups;
use NetLinker\KindPrestaShop\Lib\Guests;
use NetLinker\KindPrestaShop\Lib\Images;
use NetLinker\KindPrestaShop\Lib\ImageTypes;
use NetLinker\KindPrestaShop\Lib\Languages;
use NetLinker\KindPrestaShop\Lib\Manufacturers;
use NetLinker\KindPrestaShop\Lib\OrderCarriers;
use NetLinker\KindPrestaShop\Lib\OrderDetails;
use NetLinker\KindPrestaShop\Lib\OrderDiscounts;
use NetLinker\KindPrestaShop\Lib\OrderHistories;
use NetLinker\KindPrestaShop\Lib\OrderInvoices;
use NetLinker\KindPrestaShop\Lib\OrderPayments;
use NetLinker\KindPrestaShop\Lib\Orders;
use NetLinker\KindPrestaShop\Lib\OrderStates;
use NetLinker\KindPrestaShop\Lib\PriceRanges;
use NetLinker\KindPrestaShop\Lib\ProductFeatures;
use NetLinker\KindPrestaShop\Lib\ProductFeatureValues;
use NetLinker\KindPrestaShop\Lib\ProductOptions;
use NetLinker\KindPrestaShop\Lib\ProductOptionValues;
use NetLinker\KindPrestaShop\Lib\Products;
use NetLinker\KindPrestaShop\Lib\ProductSuppliers;
use NetLinker\KindPrestaShop\Lib\Search;
use NetLinker\KindPrestaShop\Lib\ShopGroups;
use NetLinker\KindPrestaShop\Lib\Shops;
use NetLinker\KindPrestaShop\Lib\SpecificPriceRules;
use NetLinker\KindPrestaShop\Lib\SpecificPrices;
use NetLinker\KindPrestaShop\Lib\States;
use NetLinker\KindPrestaShop\Lib\StockAvailables;
use NetLinker\KindPrestaShop\Lib\StockMovementReasons;
use NetLinker\KindPrestaShop\Lib\StockMovements;
use NetLinker\KindPrestaShop\Lib\Stocks;
use NetLinker\KindPrestaShop\Lib\Stores;
use NetLinker\KindPrestaShop\Lib\Suppliers;
use NetLinker\KindPrestaShop\Lib\SupplyOrderDetails;
use NetLinker\KindPrestaShop\Lib\SupplyOrderHistories;
use NetLinker\KindPrestaShop\Lib\SupplyOrderReceiptHistories;
use NetLinker\KindPrestaShop\Lib\SupplyOrders;
use NetLinker\KindPrestaShop\Lib\SupplyOrderStates;
use NetLinker\KindPrestaShop\Lib\Tags;
use NetLinker\KindPrestaShop\Lib\Taxes;
use NetLinker\KindPrestaShop\Lib\TaxRuleGroups;
use NetLinker\KindPrestaShop\Lib\TaxRules;
use NetLinker\KindPrestaShop\Lib\TranslatedConfigurations;
use NetLinker\KindPrestaShop\Lib\WarehouseProductLocations;
use NetLinker\KindPrestaShop\Lib\Warehouses;
use NetLinker\KindPrestaShop\Lib\WeightRanges;
use NetLinker\KindPrestaShop\Lib\Zones;

class PrestaShopWebService
{
    private static $_config;

    /**
     * PrestaShopWebService constructor.
     * @param $ps_url
     * @param $ps_key
     * @param $ps_debug
     */
    public function __construct($ps_url, $ps_key, $ps_debug)
    {
        $config = new Config();
        $config::setUrl($ps_url);
        $config::setKey($ps_key);
        $config::setDebug($ps_debug);
        self::$_config = $config;
    }

    /**
     * @return Addresses
     */
    public function Addresses()
    {
        return new Addresses();
    }

    /**
     * @return Carriers
     */
    public function Carriers()
    {
        return new Carriers();
    }

    /**
     * @return CartRules
     */
    public function CartRules()
    {
        return new CartRules();
    }

    /**
     * @return Carts
     */
    public function Carts()
    {
        return new Carts();
    }

    /**
     * @return Categories
     */
    public function Categories()
    {
        return new Categories();
    }

    /**
     * @return Combinations
     */
    public function Combinations()
    {
        return new Combinations();
    }

    /**
     * @return Configurations
     */
    public function Configurations()
    {
        return new Configurations();
    }

    /**
     * @return Contacts
     */
    public function Contacts()
    {
        return new Contacts();
    }

    /**
     * @return ContentManagementSystem
     */
    public function ContentManagementSystem()
    {
        return new ContentManagementSystem();
    }

    /**
     * @return Countries
     */
    public function Countries()
    {
        return new Countries();
    }

    /**
     * @return Currencies
     */
    public function Currencies()
    {
        return new Currencies();
    }

    /**
     * @return CustomerMessages
     */
    public function CustomerMessages()
    {
        return new CustomerMessages();
    }

    /**
     * @return Customers
     */
    public function Customers()
    {
        return new Customers();
    }

    /**
     * @return CustomerThreads
     */
    public function CustomerThreads()
    {
        return new CustomerThreads();
    }

    /**
     * @return Deliveries
     */
    public function Deliveries()
    {
        return new Deliveries();
    }

    /**
     * @return Employees
     */
    public function Employees()
    {
        return new Employees();
    }

    /**
     * @return Groups
     */
    public function Groups()
    {
        return new Groups();
    }

    /**
     * @return Guests
     */
    public function Guests()
    {
        return new Guests();
    }

    /**
     * @return Images
     */
    public function Images()
    {
        return new Images();
    }

    /**
     * @return ImageTypes
     */
    public function ImageTypes()
    {
        return new ImageTypes();
    }

    /**
     * @return Languages
     */
    public function Languages()
    {
        return new Languages();
    }

    /**
     * @return Manufacturers
     */
    public function Manufacturers()
    {
        return new Manufacturers();
    }

    /**
     * @return OrderCarriers
     */
    public function OrderCarriers()
    {
        return new OrderCarriers();
    }

    /**
     * @return OrderDetails
     */
    public function OrderDetails()
    {
        return new OrderDetails();
    }

    /**
     * @return OrderDiscounts
     */
    public function OrderDiscounts()
    {
        return new OrderDiscounts();
    }

    /**
     * @return OrderHistories
     */
    public function OrderHistories()
    {
        return new OrderHistories();
    }

    /**
     * @return OrderInvoices
     */
    public function OrderInvoices()
    {
        return new OrderInvoices();
    }

    /**
     * @return OrderPayments
     */
    public function OrderPayments()
    {
        return new OrderPayments();
    }

    /**
     * @return Orders
     */
    public function Orders()
    {
        return new Orders();
    }

    /**
     * @return OrderStates
     */
    public function OrderStates()
    {
        return new OrderStates();
    }

    /**
     * @return PriceRanges
     */
    public function PriceRanges()
    {
        return new PriceRanges();
    }

    /**
     * @return ProductFeatures
     */
    public function ProductFeatures()
    {
        return new ProductFeatures();
    }

    /**
     * @return ProductFeatureValues
     */
    public function ProductFeatureValues()
    {
        return new ProductFeatureValues();
    }

    /**
     * @return ProductOptions
     */
    public function ProductOptions()
    {
        return new ProductOptions();
    }

    /**
     * @return ProductOptionValues
     */
    public function ProductOptionValues()
    {
        return new ProductOptionValues();
    }

    /**
     * @return Products
     */
    public function Products()
    {
        return new Products();
    }

    /**
     * @return ProductSuppliers
     */
    public function ProductSuppliers()
    {
        return new ProductSuppliers();
    }

    /**
     * @return Search
     */
    public function Search()
    {
        return new Search();
    }

    /**
     * @return ShopGroups
     */
    public function ShopGroups()
    {
        return new ShopGroups();
    }

    /**
     * @return Shops
     */
    public function Shops()
    {
        return new Shops();
    }

    /**
     * @return SpecificPriceRules
     */
    public function SpecificPriceRules()
    {
        return new SpecificPriceRules();
    }

    /**
     * @return SpecificPrices
     */
    public function SpecificPrices()
    {
        return new SpecificPrices();
    }

    /**
     * @return States
     */
    public function States()
    {
        return new States();
    }

    /**
     * @return StockAvailables
     */
    public function StockAvailables()
    {
        return new StockAvailables();
    }

    /**
     * @return StockMovementReasons
     */
    public function StockMovementReasons()
    {
        return new StockMovementReasons();
    }

    /**
     * @return StockMovements
     */
    public function StockMovements()
    {
        return new StockMovements();
    }

    /**
     * @return Stocks
     */
    public function Stocks()
    {
        return new Stocks();
    }

    /**
     * @return Stores
     */
    public function Stores()
    {
        return new Stores();
    }

    /**
     * @return Suppliers
     */
    public function Suppliers()
    {
        return new Suppliers();
    }

    /**
     * @return SupplyOrderDetails
     */
    public function SupplyOrderDetails()
    {
        return new SupplyOrderDetails();
    }

    /**
     * @return SupplyOrderHistories
     */
    public function SupplyOrderHistories()
    {
        return new SupplyOrderHistories();
    }

    /**
     * @return SupplyOrderReceiptHistories
     */
    public function SupplyOrderReceiptHistories()
    {
        return new SupplyOrderReceiptHistories();
    }

    /**
     * @return SupplyOrders
     */
    public function SupplyOrders()
    {
        return new SupplyOrders();
    }

    /**
     * @return SupplyOrderStates
     */
    public function SupplyOrderStates()
    {
        return new SupplyOrderStates();
    }

    /**
     * @return Tags
     */
    public function Tags()
    {
        return new Tags();
    }

    /**
     * @return Taxes
     */
    public function Taxes()
    {
        return new Taxes();
    }

    /**
     * @return TaxRuleGroups
     */
    public function TaxRuleGroups()
    {
        return new TaxRuleGroups();
    }

    /**
     * @return TaxRules
     */
    public function TaxRules()
    {
        return new TaxRules();
    }

    /**
     * @return TranslatedConfigurations
     */
    public function TranslatedConfigurations()
    {
        return new TranslatedConfigurations();
    }

    /**
     * @return WarehouseProductLocations
     */
    public function WarehouseProductLocations()
    {
        return new WarehouseProductLocations();
    }

    /**
     * @return Warehouses
     */
    public function Warehouses()
    {
        return new Warehouses();
    }

    /**
     * @return WeightRanges
     */
    public function WeightRanges()
    {
        return new WeightRanges();
    }

    /**
     * @return Zones
     */
    public function Zones()
    {
        return new Zones();
    }

}