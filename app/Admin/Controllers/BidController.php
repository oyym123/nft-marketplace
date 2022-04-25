<?php

namespace App\Admin\Controllers;

use App\Http\Models\Bids;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BidController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bids';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bids());

        $grid->column('id', __('Id'));
        $grid->column('nft_id', __('Nft id'));
        $grid->column('bid_price', __('Bid price'));
        $grid->column('bidder_address', __('Bidder address'));
        $grid->column('bid_time', __('Bid time'));
        $grid->column('created_at', __('Created at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Bids::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nft_id', __('Nft id'));
        $show->field('bid_price', __('Bid price'));
        $show->field('bidder_address', __('Bidder address'));
        $show->field('bid_time', __('Bid time'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Bids());

        $form->number('nft_id', __('Nft id'));
        $form->decimal('bid_price', __('Bid price'));
        $form->text('bidder_address', __('Bidder address'));
        $form->datetime('bid_time', __('Bid time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
