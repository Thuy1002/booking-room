<!DOCTYPE html>
<html>
<head>
    <title>Chu</title>
</head>
<body>
    <h1>Booking Reminder</h1>
    <p>Dear {{ $booking->user->name }},</p>
    <p>This is a reminder that your booking for room {{ $booking->room->title }} will end on {{ $booking->check_out_date }}.</p>
    <p>Thank you for using our service!</p>
</body>
</html>
