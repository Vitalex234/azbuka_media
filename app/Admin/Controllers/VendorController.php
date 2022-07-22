<?php

namespace App\Admin\Controllers;

use App\Models\Vendor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VendorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Вендоры';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Vendor());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('',70,70);
        $grid->column('sort', __('Sort'));
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
        $show = new Show(Vendor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image('',200,200);
        $show->field('sort', __('Sort'));
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
        $form = new Form(new Vendor());

        $form->image('image', __('Image'))->thumbnail([
            'small' => [200, null],
            'medium' => [1200, null],
            'large' => [1920, null],
        ])->removable();
        $form->number('sort', __('Sort'))->default(100);

        return $form;
    }
}
