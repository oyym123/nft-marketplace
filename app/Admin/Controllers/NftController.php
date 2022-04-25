<?php

namespace App\Admin\Controllers;

use App\Http\components\Tool;
use App\Http\Models\Media;
use App\Http\Models\Nft;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Web3\ValueObjects\Wei;

class NftController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Nft';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Nft());
        $grid->model()->orderBy('created_at', 'desc');
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));

        $grid->column('media_id','资源')->display(function ($id) {
            return (new Media())->getUri($id);
        })->image('', 80, 80)->link(function ($info) {
            return 'http://localhost:3000/nft/' . $info->id;
        });

        $grid->column('price','价格')->display(function ($price) {
            return (new Wei($price))->toEther() . ' ether';
        });

        $grid->column('desc', __('Desc'));

        $grid->column('creator_address','创建者')->display(function ($info) {
            return Tool::substrCut($info, 3, 4, 3);
        })->copyable();


        $grid->column('owner_address','拥有者')->display(function ($info) {
            return Tool::substrCut($info, 3, 4, 3);
        })->copyable();

        $grid->column('trans_hash','交易hash')->display(function ($info) {
            return Tool::substrCut($info, 3, 4, 3);
        })->copyable();

        $grid->column('contract_address')->display(function ($info) {
            return Tool::substrCut($info, 3, 4, 3);
        })->copyable();

        $grid->column('tag_ids', __('Tag ids'));
        $grid->column('media_type', __('NFT类型'))->using(Media::getType());
        $grid->column('status', __('状态'))->using(Nft::getStatus());
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {
            $filter->like('name', '名称');
            $filter->between('created_at', '创建时间')->datetime();
            $filter->between('updated_at', '修改时间')->datetime();
        });
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
        $show = new Show(Nft::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));

        $show->field('address', __('Address'));
        $show->field('creator_address', __('Creator address'));
        $show->field('owner_address', __('Owner address'));
        $show->field('contract_address', __('Contract address'));
        $show->field('trans_hash', __('Trans hash'));
        $show->field('tag_ids', __('Tag ids'));
        $show->field('media_id', __('Media id'));
        $show->field('price', __('Price'));
        $show->field('media_type', __('Media type'));
        $show->field('status', __('Status'));
        $show->field('desc', __('Desc'));
        $show->field('start_time', __('Start time'));
        $show->field('end_time', __('End time'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Nft());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('creator_address', __('Creator address'));
        $form->text('owner_address', __('Owner address'));
        $form->text('contract_address', __('Contract address'));
        $form->text('trans_hash', __('Trans hash'));
        $form->text('tag_ids', __('Tag ids'));
        $form->number('media_id', __('Media id'));
        $form->decimal('price', __('Price'));
        $form->number('media_type', __('Media type'));
        $form->number('status', __('Status'))->default(10);
        $form->text('desc', __('Desc'));
        $form->datetime('start_time', __('Start time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_time', __('End time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
