<?php

namespace Company\Mappers;

class DepartmentMapper extends BaseMapper {

    protected function getModelClass() {
      return '\Company\Models\DepartmentModel';
    }

    protected function getTableName() {
      return'departments';
    }


    public function all() {
        $statement = $this->pdo->prepare(
          "SELECT d.dept_name, e.first_name, e.last_name, count(de.emp_no) as head_count,
              sum(case e.gender when 'M' then 1 else 0 end) as Males,
              sum(case e.gender when 'F' then 1 else 0 end) as Females
              FROM {$this->getTableName()} d
              JOIN dept_emp de on d.dept_no=de.dept_no
              JOIN dept_manager dm on d.dept_no=dm.dept_no
              JOIN employees e on dm.emp_no=e.emp_no group by d.dept_no");
        $statement->execute();
        $results = $statement->fetchAll();
        
        //call different models and call the data like so $department->name, $employee->firstname
        //$models = [];
        //foreach($results as $result) {
        //    array_push($models, $this->hydrateModel($result));
        //}
        return $results;

    }
}
