<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('url', __('Url'));
        $grid->column('title', __('Title'));
        $grid->column('keywords', __('Keywords'));
        $grid->column('description', __('Description'));
        $grid->column('order', __('Order'))->sortable();
        $grid->column('have_modal', __('Modal'));
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Page::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('url', __('Url'));
        $show->field('title', __('Title'));
        $show->field('keywords', __('Keywords'));
        $show->field('description', __('Description'));
        $show->field('order', __('Order'));
        $show->field('have_modal', __('Modal'));
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
        $form = new Form(new Page());

        $form->text('name', __('Name'));
        $form->text('url', __('Url'));
        $form->text('title', __('Title'));
        $form->text('keywords', __('Keywords'));
        $form->text('description', __('Description'));
        $form->number('order', __('Order'));
        $form->number('have_modal', __('Modal'))->min(0)->max(1);

        return $form;
    }
}
