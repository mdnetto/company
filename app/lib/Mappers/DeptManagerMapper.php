<?php

namespace Company\Mappers;

class DeptManagerMapper extends BaseMapper {

  protected function getModelClass() {
    return '\Company\Models\DeptManagerModel';
  }

  protected function getTableName() {
    return'dept_manager';
  }
}
