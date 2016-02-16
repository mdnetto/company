<?php

namespace Company\Models;

class DepartmentModel extends BaseModel {

    protected $field_map = [
        'dept_no' => self::TYPE_INT,
        'dept_name' => self::TYPE_STRING,
        'first_name' => self::TYPE_STRING,
        'last_name' => self::TYPE_STRING,
        'head_count' => self::TYPE_INT,
        'Males' => self:: TYPE_STRING,
        'Females' => self::TYPE_STRING
    ];
}

