<?php include('header.php') ?>
<?php include('dbconect.php') ?>
<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `students` WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
}
if (isset($_POST['update_students'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $query = "UPDATE `students` SET `first_name`='$firstName',`last_name`='$lastName',`age`='$age' WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $_SESSION['success_message'] = '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">Student updated successfully!</span>
            </div>';
        header('location:index.php');
        exit();
    } else {
        $_SESSION['error_message'] = '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">' . mysqli_error($connection) . '</span>
            </div>';
    }
}

// Display error messages if they exist
if (isset($_SESSION['error_message'])) {
    echo $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the message after displaying it
}
?>
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Update Student</h2>
        <a href="index.php" class="text-blue-500 hover:text-blue-700 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
            Back to List
        </a>
    </div>

    <form method="post" action="update.php?id=<?php echo $id; ?>">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">
                First Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="firstName" name="firstName" type="text" placeholder="First Name"
                value="<?php echo $row['first_name']; ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lastName">
                Last Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="lastName" type="text" name="lastName" placeholder="Last Name"
                value="<?php echo $row['last_name']; ?>">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                Age
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="age" type="number" name="age" placeholder="Age" value="<?php echo $row['age']; ?>">
        </div>
        <div class="flex items-center justify-between">
            <button onclick="document.getElementById('addStudentModal').classList.add('hidden'); return false"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Cancel
            </button>
            <input
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" value="Update Student" name="update_students">
        </div>
    </form>
</div>

<?php include('footer.php') ?>