<?php

namespace Company\Mappers;

class DeptEmpMapper extends BaseMapper {

  protected function getModelClass() {
    return '\Company\Models\DeptEmpModel';
  }

  protected function getTableName() {
    return'dept_emp';
  }
}
