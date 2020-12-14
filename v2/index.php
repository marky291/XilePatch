<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>XileRetro Patcher</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body>

  <style>
      a {
         color: #fbbf24;
      }
      a:hover {
          color: #81ff8a;
      }
  </style>

  <?php include 'assets/christmas.html'; ?>

  <?php $updates = include 'updates.php'; ?>

  <div class="p-2 bg-gradient-to-b from-gray-900 to-black background">

    <div class="text-green-400">

      <h2 class="mb-4 h-full text-2xl font-bold text-yellow-300 animate-pulse px-4 py-3 rounded">Always run your Patcher!<h2>

        <?php foreach ($updates as $update): ?>

          <div class="cursor-pointer border-l-2 border-r-2 border-gray-700 transform transition ease-in-out duration-200 hover:-translate-y-1 hover:border-yellow-400 mb-3 notice text-yellow-400 py-2 px-4 hover:bg-gray-50 hover:bg-opacity-5 rounded">
            <h2 class="font-bold mb-2 tracking-wide text-md"><?php echo $update[0]?></h2>
            <p class="text-yellow-50"><?php echo $update[1]; ?></p>
          </div>

        <?php endforeach; ?>

    </div>
  </div>

  </body>

</html>
