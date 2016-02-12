<?php

namespace Company\Mappers;

class SalariesMapper extends BaseMapper {

  protected function getModelClass() {
    return '\Company\Models\SalariesModel';
  }

  protected function getTableName() {
    return'salaries';
  }
}
