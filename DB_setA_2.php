<?php

// Sample data
$events = [
    ['eno' => 1, 'title' => 'Team Lunch', 'date' => '2023-01-01'],
    ['eno' => 2, 'title' => 'Quaterly Awards', 'date' => '2023-02-01'],
    // Add more events as needed
];

$committees = [
    ['cno' => 1, 'name' => 'management Committee ', 'head' => 'John', 'from_time' => '09:00', 'to_time' => '17:00', 'status' => 'not working'],
    ['cno' => 2, 'name' => 'in-house Committee ', 'head' => 'Jane', 'from_time' => '10:00', 'to_time' => '18:00', 'status' => 'not working'],
    // Add more committees as needed
];

// Function to modify the status of a committee to "working"
function modifyCommitteeStatus($committeeIndex)
{
    global $committees;
    $committees[$committeeIndex]['status'] = 'working';
}

// Function to find the event by title and modify the status of the associated committee
function modifyStatusByEventTitle($eventTitle)
{
    global $events, $committees;

    // Search for the event by title
    $eventIndex = array_search($eventTitle, array_column($events, 'title'));

    if ($eventIndex !== false) {
        // Assuming committees are associated with events by index
        $committeeIndex = $eventIndex;

        // Modify the status of the associated committee
        modifyCommitteeStatus($committeeIndex);

        echo "Status of Committee '{$committees[$committeeIndex]['name']}' modified to 'working' for Event '{$eventTitle}'.";
    } else {
        echo "Event with title '{$eventTitle}' not found.";
    }
}

// Example: Modify status for an event titled 'Event A'
modifyStatusByEventTitle('Team Lunch');

?>
