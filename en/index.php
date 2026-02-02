<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvea Investment Funds | Attach files </title>
    <link rel="icon" href="/favicon.ico">
	<link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="lang-switcher">
      <button class="lang-toggle" type="button" aria-haspopup="true" aria-expanded="false">
        <img src="/en.png" alt="English">
        <span>EN</span>
      </button>
      <div class="lang-menu">
        <a class="lang-item is-active" href="/en/">
          <img src="/en.png" alt="English">
          <span>EN</span>
        </a>
        <a class="lang-item" href="/ru/">
          <img src="/ru.png" alt="Russian">
          <span>RU</span>
        </a>
        <a class="lang-item" href="/de/">
          <img src="/de.png" alt="German">
          <span>DE</span>
        </a>
        <a class="lang-item" href="/pl/">
          <img src="/pl.png" alt="Polish">
          <span>PL</span>
        </a>
      </div>
    </div>
    <div class="upload-container">
      <img src="../arvea.png" alt="Arvea Investment Funds logo">
      <h2>Upload Payment Confirmation / Documents</h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" style="margin-bottom: 15px;" placeholder="First Name" required>
        <input type="text" name="surname" placeholder="Last Name" required>
        <input type="file" name="files[]" id="file-upload" class="custom-file-input" multiple required>
        <label for="file-upload" class="custom-file-label">
          <img width="60" height="60" src="/add-file.svg" alt="add-file"/>
          <span id="file-label-text">Drag or drop files here</span>
        </label>
        <br>
        <p style="color: #171620; font-style: italic;">How to Make Photo? see <a href="../template.png" target="_blank" style="color:#171620; text-decoration-line: underline;">template</a>
        </p>
        <br>
        <button type="submit">Upload</button>
      </form>
      <div class="message"> <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'success') {
                    echo '
																		<p class="success">Files successfully uploaded.</p>';
                } elseif ($_GET['status'] == 'error') {
                    echo '
																		<p class="error">Try again later...</p>';
                }
            }
            ?> </div>
    </div>
    <script>
      document.getElementById('file-upload').addEventListener('change', function() {
        var fileName = this.files.length > 0 ? this.files.length + ' file(s) selected' : 'Drag or drop file here';
        document.getElementById('file-label-text').textContent = fileName;
      });
    </script>
  </body>
</html>