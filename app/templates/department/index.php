<?

echo "<div><p><b>Department</b></p></div>
      <div><p><b>Manager</b></p></div>
      <div><p><b>Head Count</b></p></div>
      <div><p><b>Males</b></p></div>
      <div><p><b>Females</b></p></div>";

foreach($data as $row) {
    echo "<br><div><p>" . $row['dept_name'] . "</p></div>
          <div><p>" . $row['first_name'] . " " . $row['last_name'] . "</p></div>
          <div><p>" . $row['head_count'] . "</p></div>
          <div><p>" . $row['Males'] . "</p></div>
          <div><p>" . $row['Females'] . "</p></div>";
}

echo "<br>";

