<?php

namespace App\Admin\Controllers;

use App\Models\PageContent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomePageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Содержимое главной страницы';
    protected $page_id = 1;

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PageContent());

        $grid->model()->where('page_id', '=', $this->page_id);
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('content', __('Content'));
        $grid->column('image_url', __('Image'))->image('',70,70);

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
        $show = new Show(PageContent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('content', __('Content'));
        $show->field('image_url', __('Image'))->image('',200,200);;
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
        $form = new Form(new PageContent());

        $form->text('name', __('Name'));
        $form->hidden('page_id', __('Page id'))->value($this->page_id);
        $form->textarea('content', __('Content'));
        $form->image('image_url', __('Image'));

        return $form;
    }
}
