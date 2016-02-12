<?php

namespace Company\Models;

class DeptEmpModel extends BaseModel {

    protected $field_map = [
        'emp_no' => self::TYPE_INT,
        'dept_no' => self::TYPE_INT,
        'from_date' => self::TYPE_STRING,
        'to_date' => self::TYPE_STRING,
    ];
}

