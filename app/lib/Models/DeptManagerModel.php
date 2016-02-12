<?php

namespace Company\Models;

class DeptManagerModel extends BaseModel {

    protected $field_map = [
      'dept_no' => self::TYPE_INT,
      'emp_no' => self::TYPE_INT,
      'from_date' => self::TYPE_STRING,
      'to_date' => self::TYPE_STRING
    ];
}

