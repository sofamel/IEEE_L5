<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;
class PostSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\Post';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'title';

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = null;


    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->relates('user')->required()->help('فیلدهای ستاره دار الزامی میباشند.')
            ->disable(self::WHEN_EXISTS);
        $schema->string('title')->required();
        $schema->slug('slug','title')->separator('_')->help('جهت ساخت نشانی معتبر بدون وارد کردن متن در این فیلد، روی آیکون لینک کلیک نمایید');
        $schema->relates('category')->required();
        $schema->text('summary');
        $schema->ckedit('body')->label('Main Content')->required();
        $schema->boolean('slider')->label("Slider Show")->help('نشان دادن در اسلایدر');
        $field = $schema->image('images');
        $field->many();
        $schema->file('files');
        $schema->relates('tags')->isMultiple();
        $schema->embed('postComments');
        $schema->timestamps();
        $schema->compute('url', function($model) {
            return '<a target="_blank" href="/posts/'.$model->slug.'">
            <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
            Click To Open Post Page</a>';
        })->label('Post url');
        $schema->compute('utitle', function($model) {
            return '<a target="_blank" href="/posts/'.$model->slug.'">
            '.$model->title.'</a>';
        })->label('title');
    }

    protected function layout($l)
    {
//        $l->row([ 'first_name', 'last_name' ]);
//        $l->fieldset('Credentials', [ 'email', 'password' ]);

        $l->tab('post', function($t) {
            $t->row(['user']);
            $t->row(['title']);
            $t->row(['slug','url']);
            $t->row(['category', 'slider', 'created_at']);
            $t->row(['summary']);
            $t->row(['body']);
            $t->row(['images', 'files']);
        });
        $l->tab('tags', function($t) {
            $t->row(['tags',2]);
        });
        $l->tab('Comments', function($t) {
            $t->row('postComments');
        });
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('utitle');
        $schema->col('category')->help('Show url branch');
        $schema->col('images')->format('Image' , ['width'=>'100', 'height'=>'50']);
        $schema->compute('uploaded files', function($model){
            return count($model->files);
        });
        $schema->col('updated_at');
    }

    /**
     * @param \Kalnoy\Cruddy\Repo\AbstractEloquentRepository $repo
     */
    public function files($repo)
    {
        $repo->uploads('files')->to('upload/files');
        $repo->uploads('images')->to('upload/images');
    }
    /**
     * Define validation rules.
     *
     * @param \Kalnoy\Cruddy\Service\Validation\FluentValidator $v
     */
    public function rules($v)
    {
        $v->always([

        ]);
    }
}