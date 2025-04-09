<?php
// Make sure the path is correct. Adjust if needed.
include(__DIR__ . '/../conf/pdoconfig.php'); // Assuming conf/ is one level up

// Fetch account type rate
if (!empty($_POST["iBankAccountType"])) {
    $id = $_POST['iBankAccountType'];
    $stmt = $DB_con->prepare("SELECT * FROM iB_Acc_types WHERE name = :id");
    $stmt->execute([':id' => $id]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo htmlentities($row['rate']);
    }
}

// Fetch receiving account name
if (!empty($_POST["iBankAccNumber"])) {
    $id = $_POST['iBankAccNumber'];
    $stmt = $DB_con->prepare("SELECT * FROM iB_bankAccounts WHERE account_number = :id");
    $stmt->execute([':id' => $id]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo htmlentities($row['acc_name']);
    }
}

// Fetch receiving account holder (client name)
if (!empty($_POST["iBankAccHolder"])) {
    $id = $_POST['iBankAccHolder'];
    $stmt = $DB_con->prepare("SELECT * FROM iB_bankAccounts WHERE account_number = :id");
    $stmt->execute([':id' => $id]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo htmlentities($row['client_name']);
    }
}
?>
