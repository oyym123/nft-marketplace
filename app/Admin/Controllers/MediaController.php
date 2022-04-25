<?php

namespace App\Admin\Controllers;

use App\Http\Models\Media;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MediaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Media';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Media());

        $grid->column('id', __('Id'));
        $grid->uri('资源')->display(function () {
            return (new Media())->getUri($this->id);
        })->image('', 80, 80)->link(function () {
            return (new Media())->getUri($this->id);
        });
        $grid->type('类型')->display(function () {
            return (new Media())->getType($this->type);
        });
        $grid->column('name', __('Name'));
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
        $show = new Show(Media::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('Type'));
        $show->field('name', __('Name'));
        $show->field('uri', __('Uri'));
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
        $form = new Form(new Media());

        $form->number('type', __('Type'));
        $form->text('name', __('Name'));
        $form->text('uri', __('Uri'));

        return $form;
    }
}
