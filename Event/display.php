<?php
require_once '../classes/Dbconnector.php'; // Replace with your database connection code
require_once '../classes/Admin.php'; // Replace with your Event class definition

// Check if the event ID is provided in the URL
if (isset($_GET['EventID'])) {
    $event_id = $_GET['EventID'];

    // Retrieve event data from the database (you may need to adjust this query)
    $query = "SELECT * FROM Events WHERE EventID = :event_id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $stmt->execute();
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$event) {
        echo "Event not found.";
        exit;
    }
} else {
    echo "Event ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file here -->
</head>
<body>
    <div class="container">
        <h1>Event Details</h1>

        <h2>Event Information</h2>
        <p><strong>Event Name:</strong> <?= $event['EventName'] ?></p>
        <p><strong>Date:</strong> <?= $event['EventDate'] ?></p>
        <p><strong>Start Time:</strong> <?= $event['StartTime'] ?></p>
        <p><strong>End Time:</strong> <?= $event['EndTime'] ?></p>
        <p><strong>Max Participants:</strong> <?= $event['maxparticipants'] ?></p>
        <p><strong>Hall:</strong> <?= $event['Hall'] ?></p>

        <h2>Decoration and Services</h2>
        <p><strong>Decoration:</strong> <?= $event['Decoration'] ?></p>
        <p><strong>Sample Photo:</strong> <img src="<?= $event['SamplePhoto'] ?>" alt="Event Photo"></p>
        <p><strong>Comment:</strong> <?= $event['Comment'] ?></p>
        <p><strong>Studio:</strong> <?= $event['Studio'] ?></p>
        <p><strong>Catering:</strong> <?= $event['Catering'] ?></p>
        <p><strong>Sound System:</strong> <?= $event['SoundSystem'] ?></p>

        <h2>User Information</h2>
        <p><strong>Username:</strong> <?= $event['Username'] ?></p>

        <a href="event_list.php">Back to Event List</a> <!-- Link to return to the event list page -->
    </div>
</body>
</html>