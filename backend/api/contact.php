<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../config/db.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name = $_POST['nam'] ?? '';
    $Email = $_POST['email'] ?? '';
    $Phone = $_POST['phone'] ?? '';
    $Subject = $_POST['subject'] ?? '';
    $Message = $_POST['message'] ?? '';

    $sql = "INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        $response['message'] = "Prepare failed: " . $conn->error;
        echo json_encode($response);
        exit;
    }

    $stmt->bind_param("sssss", $Name, $Email, $Phone, $Subject, $Message);

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

            $mail->setFrom('Developer@autoworkshop.com', 'Contact');
            $mail->addAddress($Email, $Name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Contact Reply');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Received';
            $mail->Body    = "Dear $Name,<br>Thanks for Contacting Us.<br><br>Details:<br>Phone: $Phone<br>Subject: $Subject<br>Message: $Message";
            $mail->AltBody = "Dear $Name,\nThanks for Contacting Us.\n\nDetails:\nPhone: $Phone\Subject: $Subject\Message: $Message";

            $mail->send();
            $response['success'] = true;
            $response['message'] = 'Message sent successfully!';
        } catch (Exception $e) {
            $response['message'] = "Message saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $response['message'] = "Database error: " . $conn->error;
    }

    $stmt->close();
} else {
    $response['message'] = 'Invalid request method.';
}

$conn->close();
echo json_encode($response);
?>
