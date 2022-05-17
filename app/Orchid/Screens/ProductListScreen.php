<?php

namespace App\Orchid\Screens;

use App\Models\Product;
use App\Orchid\Layouts\ProductListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ProductListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'products' => Product::paginate()
        ];
    }

    public function description(): ?string
    {
        return "Productzzzz";
    }
    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ProductListScreen';
    }



    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.product.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            ProductListLayout::class
        ];
    }
}
