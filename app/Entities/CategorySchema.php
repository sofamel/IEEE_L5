<?php

namespace App\Entities;

use App\Models\Post;
use Kalnoy\Cruddy\Entity;

class CategorySchema extends Entity {

    public function __construct(){
        $this->posts = new Post();
        $this->result = [];
    }

    /**
     * @var string
     */
    protected $model = 'App\Models\Category';

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
        $schema->string('title');
        $schema->compute('last posts', function($model) {
            $filter = $model->id;
            $data = $this->posts->where('category_id', $filter)->take(10)->get()->toArray();
            foreach ($data as $key => $value) {
                array_push($this->result, ($key+1).'. ', '<a href="posts?id='.$value["id"].'">'.$value['title'].'</a>', '<br>');
            }
            return ($this->result);
        });
        $schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('title');
        $schema->col('updated_at')->reversed();
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