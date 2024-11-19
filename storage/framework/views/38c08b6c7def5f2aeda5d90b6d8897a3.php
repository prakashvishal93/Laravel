<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WriteWave</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
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
      body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    
    height: 100vh;
}   

  .container{
    display: flex
  }
  .first-container{
    width: 800px;
    margin: 20px;
    margin-top: 50px;
    text-align: center;
  }

  img {
    height: 400px;
    width: 400px;
    margin: 40px;
    border-radius: 10px
  }
    </style>
  </head>
  <body>
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
    <div class="container">
      <div class="first-container">
        <h4>
          Welcome to
          <h3>WriteWave</h3>
        </h4>
        <h4>Where Ideas Come to Life!</h4>
        <br>

        <p>
          Discover a world of creativity and knowledge-sharing at <span style="color: rgb(24, 78, 122);">WriteWave</span>. Whether you're a passionate writer, an avid reader,
          or someone looking for inspiration, our platform is here to empower
          you. Dive into a diverse collection of articles covering a wide
          range of topics, or unleash your creativity by sharing your own
          thoughts and stories with our vibrant community.
        </p>
        <p style="text-align: left;">
          Join us on a journey of exploration, learning, and connection.
          Together, let's create, inspire, and make a difference. Start your
          adventure today!"
        </p>
      </div>
      <div>
        <img src="<?php echo e(asset('image.jpg')); ?>">
      </div>
    </div>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\laravel\blogproject\resources\views/home.blade.php ENDPATH**/ ?>