<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../config/db.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name = $_POST['nam'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $Phone = $_POST['phone'] ?? '';
    $Address = $_POST['address'] ?? '';
    $Type = $_POST['carType'] ?? '';
    $C_Brand = $_POST['carBrand'] ?? '';
    $C_Num = $_POST['carNumber'] ?? '';
    $Service = $_POST['ser'] ?? '';
    $Package = $_POST['pack'] ?? '';
    $Date = $_POST['date'] ?? '';
    $S_time = $_POST['start-time'] ?? '';
    $F_time = $_POST['end-time'] ?? '';

    $sql = "INSERT INTO appointment (Name, Email, Phone, Address, Type, C_Brand, C_num, Service, Package, Date, S_time, F_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        $response['message'] = 'Prepare failed: ' . $conn->error;
        echo json_encode($response);
        exit;
    }

    $stmt->bind_param("ssssssssssss", $Name, $Email, $Phone, $Address, $Type, $C_Brand, $C_Num, $Service, $Package, $Date, $S_time, $F_time);

    if ($stmt->execute()) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'asalamsalim94@gmail.com';
            $mail->Password = 'jzmo yyna tgxj mfqk';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('Developer@autoworkshop.com', 'Appointment');
            $mail->addAddress($Email, $Name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Appointment Reply');

            $mail->isHTML(true);
            $mail->Subject = 'Appointment Booked';
            $mail->Body    = "Dear $Name,<br>Your Appointment has been booked.<br><br>Details:<br>Phone: $Phone<br>Address: $Address<br>Car_Type: $Type<br>Car_Brand: $C_Brand<br>Car_Number: $C_Num<br>Service: $Service<br>Package: $Package<br>Date: $Date<br>Starting_Time: $S_time<br>Ending_Time: $F_time";
            $mail->AltBody = "Dear $Name,\nYour Appointment has been booked.\n\nDetails:\nPhone: $Phone\nAddress: $Address\nCar_Type: $Type\nCar_Brand: $C_Brand\nCar_Number: $C_Num\nService: $Service\nPackage: $Package\nDate: $Date\nStarting_Time: $S_time\nEnding_Time: $F_time";

            $mail->send();
            $response['success'] = true;
            $response['message'] = 'Appointment booked successfully and email sent.';
        } catch (Exception $e) {
            $response['message'] = "Appointment booked but email failed. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $response['message'] = "Database error: " . $stmt->error;
    }

    $stmt->close();
} else {
    $response['message'] = 'Invalid request method.';
}

$conn->close();
echo json_encode($response);
?>
