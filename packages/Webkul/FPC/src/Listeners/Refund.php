<?php

namespace Webkul\FPC\Listeners;

use Spatie\ResponseCache\Facades\ResponseCache;

class Refund
{
    /**
     * After refund is created
     *
     * @param  \Webkul\Sale\Contracts\Refund  $refund
     * @return void
     */
    public function afterCreate($refund)
    {
        foreach ($refund->items as $item) {
            $urls = $this->getForgettableUrls($item->product);

            ResponseCache::forget($urls);
        }
    }
}
