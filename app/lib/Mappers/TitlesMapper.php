<?php

namespace Company\Mappers;

class TitlesMapper extends BaseMapper {

  protected function getModelClass() {
    return '\Company\Models\TitlesModel';
  }

  protected function getTableName() {
    return 'titles';
  }
}
