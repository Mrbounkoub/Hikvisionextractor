<?php
  // Check if the form was submitted
  if (isset($_POST['submit'])) {
    // Get the uploaded CSV file
    if (isset($_FILES['file'])) {
      $file = $_FILES['file']['tmp_name'];
    } else {
      // Handle the case where the element does not exist
    }

    // Open the file and read the data as a string
    $data = file_get_contents($file);

    // Split the data into rows
    $rows = explode("\n", $data);

    // Initialize an array to store the extracted data
    $extractedData = array();

    // Loop through each row
    foreach ($rows as $row) {
      // Split the row into cells
      $cells = explode(",", $row);

      // Extract the "Person ID", "Name", and "Time" columns
      if (isset($cells[0])) {
        $personId = $cells[0];
      } else {
        // Handle the case where the index does not exist
      }
      if (isset($cells[1])) {
        $name = $cells[1];
      } else {
        // Handle the case where the index does not exist
      }
      if (isset($cells[3])) {
        $dateTime = $cells[3];
      } else {
        // Handle the case where the index does not exist
      }

      // Split the "Time" column into "Date" and "Time"
      $date = substr($dateTime, 0, 10);
      $time = substr($dateTime, 11);

      // Check if the row is empty
      if (empty($personId) || empty($name) || empty($dateTime)) {
        continue; // Skip the empty row
      }

      // Add the extracted data to the array
      $extractedData[] = array(
        'Person ID' => $personId,
        'Name' => $name,
        'Date' => $date,
        'Time' => $time,
      );
    }

    // Initialize a variable to store the current date
    $currentDate = '';

    // Convert the extracted data to a CSV string
    $csv = "Person ID,Name,Date,Time\n";
    foreach ($extractedData as $row) {
      // Check if the date has changed
      if ($row['Date'] != $currentDate) {
        // Add an empty row
        $csv .= "\n";

        // Update the current date
        $currentDate = $row['Date'];
      }

// Set the upload directory
$upload_dir = "uploads/";

// Move the uploaded file to the upload directory
if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir . $_FILES['file']['name'])) {
  // Upload was successful
} else {
  // Upload failed
}
      // Add the row to the CSV string
      $csv .= $row['Person ID'] . ',' . $row['Name'] . ',' . $row['Date'] . ',' . $row['Time'] . "\n";
    }

    // Download the extracted data as a CSV file
    header('ContentType: text/csv');
    header('Content-Disposition: attachment; filename="extracted-data.csv"');
    echo $csv;
    exit();
  }
?>