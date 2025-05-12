# PHP CRUD Application

[![Student Management System Demo](assets/images/thumbnail.png)](assets/videos/demo.mp4 "Watch the demo video")

## Project Overview

This is a simple but powerful Student Management System built with PHP and MySQL, featuring a modern UI with Tailwind CSS. The application allows you to manage student records through a complete set of CRUD (Create, Read, Update, Delete) operations.

## Features

- **Clean, Modern UI** with Tailwind CSS
- **Responsive Design** that works on mobile and desktop
- **Student Management**
  - Add new students with first name, last name, and age
  - View all students in a sortable table
  - Update existing student information
  - Delete students from the database
- **Form Validation** to ensure data integrity
- **User-friendly Notifications** for all operations

## Directory Structure

```
c:\xampp\htdocs\fouad\
├── assets/
│   ├── images/          # Store thumbnails and screenshots here
│   ├── videos/          # Store your project videos here
│   └── css/             # Additional CSS files (if needed)
├── dbconect.php         # Database connection file
├── header.php           # Header template
├── footer.php           # Footer template
├── index.php            # Main page listing all students
├── insert_data.php      # Processing for adding new students
├── update.php           # Edit page for student records
├── delete.php           # Processing for deleting students
└── README.md            # This file
```

## Setup Instructions

1. **Database Setup**

   - Create a MySQL database named `student_db`
   - Import the provided SQL file `student_db.sql` (or create the table manually)

2. **Configuration**

   - Ensure XAMPP is installed and running
   - Place the project files in your XAMPP htdocs directory
   - Update the database credentials in `dbconect.php` if necessary

3. **Access the Application**
   - Open your browser and navigate to: http://localhost/fouad/

## Adding Images to the Project

To add images to this project:

1. **Create the images directory** (if it doesn't exist):

   ```
   c:\xampp\htdocs\fouad\assets\images\
   ```

2. **Take screenshots of your application:**

   - Take a screenshot of the main page showing the student list
   - Take a screenshot of the add student form
   - Take a screenshot of the update student form

3. **Save the images** in the `assets/images/` directory with descriptive names:

   - `screenshot.png` - Main application screenshot
   - `add-student.png` - Add student form
   - `update-student.png` - Update student form

4. **Update image references** in your code where needed.

5. **Include the images in this README** by referencing them with the correct path:
   ```markdown
   ![Description](assets/images/image-name.png)
   ```

## Adding Videos to the Project

To add videos to this project:

1. **Create the videos directory** (if it doesn't exist):

   ```
   c:\xampp\htdocs\fouad\assets\videos\
   ```

2. **Record demonstrations of your application:**

   - Record a demo of the main CRUD operations
   - Record a walkthrough of the application features
   - Create short clips of specific functionality

3. **Save the videos** in the `assets/videos/` directory with descriptive names:

   - `demo.mp4` - Main application demonstration
   - `add-student.mp4` - Adding a student walkthrough
   - `update-student.mp4` - Updating a student walkthrough

4. **Create thumbnails** for your videos and save them in `assets/images/`

5. **Embed videos in your README** by using either:

   - **HTML5 video tag** (for GitHub pages or HTML documentation):

   ```html
   <video width="640" height="360" controls>
     <source src="assets/videos/demo.mp4" type="video/mp4" />
     Your browser does not support the video tag.
   </video>
   ```

   - **Linked thumbnail** (for standard GitHub README):

   ```markdown
   [![Video Description](assets/images/thumbnail.png)](assets/videos/demo.mp4 "Watch the video")
   ```

   - **Embed YouTube videos** (if you upload them):

   ```markdown
   [![Video Description](https://img.youtube.com/vi/YOUR_VIDEO_ID/0.jpg)](https://www.youtube.com/watch?v=YOUR_VIDEO_ID)
   ```

## Video Specifications

- **Format:** MP4 with H.264 encoding (most compatible)
- **Resolution:** 1280x720 (720p) or 1920x1080 (1080p)
- **Aspect ratio:** 16:9
- **Maximum file size:** Keep videos under 50MB for better loading
- **Audio:** Clear narration explaining the features (if applicable)

## How to Use

1. **View Students:** The homepage displays all students in the database
2. **Add a Student:** Click the "Add Student" button and fill in the form
3. **Update a Student:** Click the "Edit" button next to a student and modify their information
4. **Delete a Student:** Click the "Delete" button next to a student and confirm the deletion

## Technologies Used

- PHP 7.4+
- MySQL 5.7+
- Tailwind CSS 3.0+
- HTML5
- JavaScript (Minimal)

## Future Enhancements

- User authentication and role-based access control
- Advanced search and filtering capabilities
- Data export functionality (CSV, PDF)
- Dashboard with statistics
- Bulk operations for managing multiple students

## License

This project is open source and available under the [MIT License](https://opensource.org/licenses/MIT).

## Contact

For any questions or suggestions about this project, please contact the developer.
