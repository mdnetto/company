<?php

namespace Company\Models;

class SalariesModel extends BaseModel {

    protected $field_map = [
      'emp_no' => self::TYPE_INT,
      'salary' => self::TYPE_INT,
      'from_date' => self::TYPE_STRING,
      'to_date' => self::TYPE_STRING
    ];
}

