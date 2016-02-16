<?

echo "<div><p><b>Name</b></p></div>
      <div><p><b>Gender</b></p></div>
      <div><p><b>Department</b></p></div>
      <div><p><b>Manager</b></p></div>
      <div><p><b>Date Hired</b></p></div>";

foreach($data as $employee) {
  echo "<br><div><p><a href='employee/{$employee->emp_no}'>" . $employee->first_name . ' ' . $employee->last_name . "</a></p></div>
    <div><p>" . $employee->gender . "</div></p>
    <div><p>space department</div></p>
    <div><p>space manager</div></p>
    <div><p>$employee->hire_date</div></p>";
}
