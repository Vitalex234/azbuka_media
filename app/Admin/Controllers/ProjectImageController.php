<?php

namespace App\Admin\Controllers;

use App\Models\ProjectImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProjectImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectImage());

        $grid->column('id', __('Id'));
        $grid->column('project_id', __('Project id'));
        $grid->column('image', __('Image'));
        $grid->column('is_main_image', __('Is main image'));
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
        $show = new Show(ProjectImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('project_id', __('Project id'));
        $show->field('image', __('Image'));
        $show->field('is_main_image', __('Is main image'));
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
        $form = new Form(new ProjectImage());

        $form->number('project_id', __('Project id'));
        $form->image('image', __('Image'));
        $form->switch('is_main_image', __('Is main image'));

        return $form;
    }
}
