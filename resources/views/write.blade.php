<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WriteWave</title>
    <style>
      h3 {
        color: rgb(24, 78, 122);
        margin: 0;
      }

      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        padding: 10px 20px;
      }

      .navbar-brand {
        text-decoration: none;
        color: rgb(24, 78, 122);
      }

      .navbar-nav {
        display: flex;
        gap: 20px;
      }

      .nav-link {
        text-decoration: none;
        color: rgb(24, 78, 122);
        font-size: 16px;
      }

      .nav-link.active {
        font-weight: bold;
      }

      .toggler-button {
        display: none;
      }

      @media (max-width: 768px) {
        .navbar {
          flex-direction: column;
          align-items: flex-start;
        }

        .navbar-nav {
          flex-direction: column;
          width: 100%;
        }

        .toggler-button {
          display: block;
          background: none;
          border: none;
          font-size: 20px;
          margin-bottom: 10px;
        }
      }
      * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    
    height: 100vh;
}

.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}
.write-body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"], 
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

textarea {
    resize: vertical;
}

input:focus, 
textarea:focus {
    border-color: #007bff;
    outline: none;
}

.form-group.buttons {
    display: flex;
    justify-content: space-between;
}

button {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="reset"] {
    background-color: #6c757d;
}

button:hover {
    background-color: #0056b3;
}

button[type="reset"]:hover {
    background-color: #5a6268;
}
    </style>
  </head>
  <body>
    @if(session('success'))
    <div style="color: green; text-align: center; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
    @endif
    <nav class="navbar">
      <a class="navbar-brand" href="/">
        <h1>WriteWave</h1>
      </a>
      <button class="toggler-button" aria-label="Toggle navigation">☰</button>
      <div class="navbar-nav">
        <a class="nav-link active" href="/read-articles"><h3>Read Articles</h3></a>
        <a class="nav-link" href="/write-article"><h3>Write article</h3></a>
      </div>
    </nav>
    <hr />
    <div class="write-body">
        <div class="form-container">
            <h2>Write Article</h2>
            <form id="articleForm" action="{{ route('store.article') }}" method="POST">
              @csrf
              <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" id="title" name="title" required>
              </div>
              
              <div class="form-group">
                  <label for="author">Author Name:</label>
                  <input type="text" id="author" name="author" required>
              </div>
              
              <div class="form-group">
                  <label for="body">Content:</label>
                  <textarea id="body" name="body" rows="8" required></textarea>
              </div>
              
              <div class="form-group buttons">
                  <button type="submit">Submit</button>
                  <button type="reset">Reset</button>
              </div>
          </form>
          
        </div>
    </div>
  </body>
</html>
