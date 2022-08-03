<?php

namespace NA\BundleOptionItemPagination\Plugin;


class BundlePanelPlugin
{

    public function afterModifyMeta(
        \Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundlePanel $subject,
                                                                          $result
    )
    {
       $result['bundle-items']['children']['bundle_options']['children']['record']['children']['product_bundle_container']['children']['bundle_selections']['arguments']['data']['config']['pageSize'] = 100;
       return $result;
    }
}
