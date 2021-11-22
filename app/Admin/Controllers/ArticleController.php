<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('Image'));
        $grid->column('short_desc', __('Short desc'));
        $grid->column('image_thumb', __('Image thumb'));
        $grid->column('full_content', __('Full content'));
        $grid->column('source_url', __('Source url'));
        $grid->column('alias', __('Alias'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'));
        $show->field('short_desc', __('Short desc'));
        $show->field('image_thumb', __('Image thumb'));
        $show->field('full_content', __('Full content'));
        $show->field('source_url', __('Source url'));
        $show->field('alias', __('Alias'));
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
        $form = new Form(new Article());

        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->textarea('short_desc', __('Short desc'));
        $form->text('image_thumb', __('Image thumb'));
        $form->textarea('full_content', __('Full content'));
        $form->text('source_url', __('Source url'));
        $form->text('alias', __('Alias'));

        return $form;
    }
}
