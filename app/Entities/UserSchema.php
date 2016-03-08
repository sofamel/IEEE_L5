<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class UserSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\User';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'email';

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
        $schema->string('first_name');
        $schema->string('last_name');
        $schema->string('email');
        $schema->string('password');
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
        $schema->col('first_name');
        $schema->col('email');
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