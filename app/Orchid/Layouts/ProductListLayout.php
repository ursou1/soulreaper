<?php

namespace App\Orchid\Layouts;

use App\Models\Product;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProductListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'products';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Product $product) {
                    return Link::make($product->title)
                        ->route('platform.product.edit', $product);
                }),

            TD::make('cost', 'Cost'),

            TD::make('image', 'Image')

                ->render(function (Product $product){
                    return "<img src='{$product->image}'
                        alt='sample'
                        class=' img-thumbnail'
                        height='140'
                        width='200'>";
                }),
        ];
    }
}
