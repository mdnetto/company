<?php

namespace Company\Models;

class TitlesModel extends BaseModel {

    protected $field_map = [
        'emp_no' => self::TYPE_INT,
        'title' => self::TYPE_STRING,
        'from_date' => self::TYPE_STRING,
        'to_date' => self::TYPE_STRING
    ];
}

