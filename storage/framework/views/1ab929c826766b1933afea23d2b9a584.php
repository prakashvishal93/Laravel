<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WriteWave - Read Articles</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
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

      h2 {
        text-align: center;
        color: rgb(24, 78, 122);
        margin-bottom: 20px;
      }

      .articles-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }

      .article-card {
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .article-title {
        font-size: 20px;
        font-weight: bold;
        color: rgb(24, 78, 122);
        margin-bottom: 10px;
      }

      .article-author {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
      }

      .article-content {
        font-size: 16px;
        color: #333;
        margin-bottom: 15px;
      }

      .delete-button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .delete-button:hover {
        background-color: #c82333;
      }
    </style>
  </head>
  <body>
    <?php if(session('success')): ?>
    <div style="color: green; text-align: center; margin-bottom: 15px;">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <nav class="navbar">
      <a class="navbar-brand" href="/">
        <h1>WriteWave</h1>
      </a>
      <div class="navbar-nav">
        <a class="nav-link active" href="/read-articles"><h3>Read Articles</h3></a>
        <a class="nav-link" href="/write-article"><h3>Write Article</h3></a>
      </div>
    </nav>
    <hr />

    <h2>Read Articles</h2>

    <div class="articles-container">
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="article-card">
          <div class="article-title"><?php echo e($article->title); ?></div>
          <div class="article-author">by <?php echo e($article->author); ?></div>
          <div class="article-content"><?php echo e(Str::limit($article->body, 100)); ?></div>
          <form method="POST" action="<?php echo e(route('articles.delete', $article->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="delete-button">Delete</button>
          </form>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\laravel\blogproject\resources\views/read.blade.php ENDPATH**/ ?>