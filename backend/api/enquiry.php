<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../config/db.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nam'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $brand = $_POST['brand'] ?? '';
    $email = $_POST['mail'] ?? '';
    $desc = $_POST['desc'] ?? '';

    $file_path = '';
    $file_uploaded = false;

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = basename($_FILES['file']['name']);
        $upload_dir = "../../uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $file_uploaded = true;
        } else {
            $response['message'] = "File upload failed.";
            echo json_encode($response);
            exit;
        }
    }

    $sql = "INSERT INTO enquiries (name, phone, brand, email, description, file_path) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $phone, $brand, $email, $desc, $file_path);

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

            $mail->setFrom('Developer@autoworkshop.com', 'Enquiry');
            $mail->addAddress($email, $name);
            $mail->addBCC('sp23bscs0213@maju.edu.pk');
            $mail->addReplyTo('muhammadabdussalam593@gmail.com', 'Enquiry Reply');

            if ($file_uploaded) {
                $mail->addAttachment($file_path);
            }

            $mail->isHTML(true);
            $mail->Subject = 'Enquiry Received';
            $mail->Body    = "Dear $name,<br>Your enquiry has been received.<br><br>Details:<br>Phone: $phone<br>Brand: $brand<br>Description: $desc";
            $mail->AltBody = "Dear $name,\nYour enquiry has been received.\n\nDetails:\nPhone: $phone\nBrand: $brand\nDescription: $desc";

            $mail->send();
            $response['success'] = true;
            $response['message'] = 'Enquiry submitted successfully and email sent.';
        } catch (Exception $e) {
            $response['message'] = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
