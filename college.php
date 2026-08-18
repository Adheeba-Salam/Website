<!DOCTYPE html>
<html>
<head>
  <title>College of Engineering Perumon</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }

    header, footer {
      background-color: #005599;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #005599;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }

    .container {
      padding: 20px;
    }

    img.logo {
      width: 120px;
      display: block;
      margin: 10px auto;
    }

    .principal-section {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-top: 40px;
    }

    .principal-section img {
      width: 200px;
      height: auto;
      border-radius: 10px;
    }

    .principal-message {
      max-width: 700px;
    }

    form {
      margin-top: 15px;
    }

    input, textarea {
      display: block;
      margin-bottom: 10px;
      padding: 8px;
      width: 100%;
      max-width: 400px;
    }

    label {
      font-weight: bold;
    }

    #response {
      margin-top: 15px;
      color: green;
      font-weight: bold;
    }

    .section {
      margin-top: 50px;
    }

    .radio-group{
      display:block;
      gap:35px;
      margin-top: 20px;
    }

    .radio-group label {
      display: block;
      align-items:center;
      gap:10px;
      margin-bottom:10px;
      font-size:16px
    }

    .footer-text {
      font-size: 14px;
    }

    #register-section {
      display: none;
      background-color: #f0f0f0;
      padding: 20px;
      margin-top: 40px;
      border-radius: 10px;
    }

    pre {
      background: #f4f4f4;
      padding: 15px;
      border-radius: 10px;
      overflow-x: auto;
    }
  </style>
</head>
<body>

  <header>
    <h1>College of Engineering Perumon</h1>
    <h3>Affiliated to APJ Abdul Kalam Technological University</h3>
    <img src="cep_img.jpg" alt="College Logo" class="logo" style="width:100%; height: auto;">
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Departments</a>
    <a href="#">Admissions</a>
    <a href="#contact">Contact</a>
    <a onclick="toggleRegister()">Register</a>
    <a href="#phpcode">PHP Program</a>
  </nav>

  <div class="container">
    <section>
      <h2>Welcome to College of Engineering Perumon</h2>
      <p>
        College of Engineering Perumon is a government-controlled engineering college established in 2000 under the Co-operative Academy of Professional Education (CAPE), affiliated to APJ Abdul Kalam Technological University and approved by AICTE.
      </p>
    </section>

    <section>
      <h3>Departments:</h3>
      <ul>
        <li>Computer Science and Engineering (CSE)</li>
        <li>Electronics and Communication Engineering (ECE)</li>
        <li>Electrical and Electronics Engineering (EEE)</li>
        <li>Mechanical Engineering (ME)</li>
        <li>Artificial Intelligence and Data Science(AI)</li>
        <li>Electronics and Computer(ECC)</li>
      </ul>
    </section>

    <section class="principal-section">
      <img src="Principal_cep.jpeg" alt="Principal Photo">
      <div class="principal-message">
        <h2>Principal's Message</h2>
        <p>
          Welcome to the College of Engineering Perumon. Our institution is committed to fostering an environment of academic excellence, innovation, and integrity.
        </p>
        <p><strong>– Dr. Ananda Resmi, Principal</strong></p>
      </div>
    </section>

    <section class="section" id="contact">
      <h2>Contact Us</h2>
      <p>
        <strong>Address:</strong> College of Engineering Perumon, Perinad P.O, Kollam, Kerala - 691601<br>
        <strong>Phone:</strong> +91-474-2550500<br>
        <strong>Email:</strong> principal@perumonec.ac.in
      </p>

      <form id="contactForm">
        <label for="name">Your Name:</label>
        <input type="text" id="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
      </form>

      <div id="response"></div>
    </section>

    <section id="register-section">
      <h2>Student Registration Form</h2>
      <form method="get">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="student_name" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label>Gender:</label>
        <div class="radio-group">
          <label><input type="radio" name="gender" value="Male" required> Male</label>
          <label><input type="radio" name="gender" value="Female"> Female</label>
          <label><input type="radio" name="gender" value="Others"> Others</label>
        </div>

        <label>Department:</label>
        <div class="radio-group">
          <label><input type="radio" name="department" value="CSE" required> Computer Science</label>
          <label><input type="radio" name="department" value="MECH"> Mechanical</label>
          <label><input type="radio" name="department" value="EEE"> Electrical</label>
          <label><input type="radio" name="department" value="AI"> AI & Data Science</label>
          <label><input type="radio" name="department" value="ECE"> Electronics & Communication</label>
          <label><input type="radio" name="department" value="ECO"> Electronics & Computer</label>
        </div>

        <br>
        <button type="submit">Register</button>
      </form>
    </section>

    <!-- PHP Code Display -->
    <section id="phpcode" class="section">
      <h2>Sample PHP Program (Display Only)</h2>
      <p>This PHP program shows how the registration form data could be processed on a server. It is displayed here for reference and does not run on this page.</p>
      <pre>
&lt;?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['student_name'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $department = $_POST['department'];

      echo "Student Name: " . $name . "&lt;br&gt;";
      echo "Address: " . $address . "&lt;br&gt;";
      echo "Gender: " . $gender . "&lt;br&gt;";
      echo "Department: " . $department;
  }
?&gt;
      </pre>
    </section>

  </div>

  <footer>
    <p class="footer-text">&copy; 2025 College of Engineering Perumon. All rights reserved.</p>
  </footer>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
      event.preventDefault();
      const name = document.getElementById("name").value;
      const message = document.getElementById("message").value;
      document.getElementById("response").innerText =
        `Thank you, ${name}. Your message has been received: "${message}"`;
      this.reset();
    });

    function toggleRegister() {
      const form = document.getElementById("register-section");
      form.style.display = (form.style.display === "none" || form.style.display === "") ? "block" : "none";
      window.scrollTo({
        top: form.offsetTop,
        behavior: "smooth"
      });
    }
  </script>

</body>
</html>
