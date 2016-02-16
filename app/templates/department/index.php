<?

echo "<div><p><b>Department</b></p></div>
      <div><p><b>Manager</b></p></div>
      <div><p><b>Head Count</b></p></div>
      <div><p><b>Males</b></p></div>
      <div><p><b>Females</b></p></div>";

foreach($data as $dept) {
    echo "<br><div><p><a href='department/{$dept->dept_no}'>" . $dept->dept_name . "</a></p></div>
          <div><p>" . $dept->first_name . " " . $dept->last_name . "</p></div>
          <div><p>" . $dept->head_count . "</p></div>
          <div><p>" . $dept->Males . "</p></div>
          <div><p>" . $dept->Females . "</p></div>";
}

echo "<br>";

