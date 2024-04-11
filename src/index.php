<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <title>Document</title>
</head>

<body class="bg-[#111827]">
  <div class="p-6 flex justify-center items-center lg:mt-20 md:mt-16 sm:mt-12 mt-2 text-white">
    <form action='connect.php' method="post">
      <div class="flex flex-col mb-8">
        <label>Name</label>
        <input class="bg-[#1d2432] mt-2" type="text" name="name" placeholder="Enter Your Name">
      </div>
      <div class="flex flex-col mb-8">
        <label>Tanggal Lahir</label>
        <input class="bg-[#1d2432] mt-2" type="date" name="date">
      </div>
      <div class="flex flex-col mb-8">
        <label>Program Studi</label>
        <input class="bg-[#1d2432] mt-2" type="text" name="prodi" placeholder="Enter Your Prodi">
      </div>
      <div class="flex flex-col mb-8">
        <label>NIM</label>
        <input class="bg-[#1d2432] mt-2" type="number" name="nim" placeholder="Enter NIM">
      </div>
      <div class="flex justify-center items-center">
        <input id="submit"
          class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 py-2 px-4 rounded-xl hover:cursor-pointer"
          type="submit" value="Submit">
      </div>
    </form>
    <div id="result"></div>
  </div>

  <script src="./main.js"></script>
</body>

</html>