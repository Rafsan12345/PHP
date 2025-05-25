Php function Call from browsers 
<?php
function sayHello() {
    echo "হ্যালো বাংলাদেশ!";
}

function sayHi($name) {
    echo "হাই, " . htmlspecialchars($name);
}

// যদি URL দিয়ে function কল করা হয়
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'hello') {
        sayHello();
    } elseif ($action == 'hi' && isset($_GET['name'])) {
        sayHi($_GET['name']);
    } else {
        echo "ভুল action বা নাম নেই।";
    }
} else {
    echo "কোন action নির্ধারণ করা হয়নি।";
}
?>



http://localhost/myfile.php?action=hello

http://localhost/myfile.php?action=hi&name=Hasan

