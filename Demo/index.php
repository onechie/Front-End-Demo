<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <link rel="stylesheet" href="/Demo/styles/index.css" />
  <title>Home</title>
</head>

<body>
  <div class='relative bg-slate-100 h-full'>
    <?php
    //HEADER COMPONENT
    require_once '../demo/components/header.php';
    ?>
    <div class="flex h-full w-full">
      <?php
      //NAVBAR COMPONENT
      require_once '../demo/components/navbar.php';
      ?>
      <!-- MAIN CONTENT -->
      <div class='bg-gray-900 h-full w-full p-3 pt-[60px]'>
        <div class='bg-gray-800 h-full w-full py-3 px-6 flex flex-col'>
          <!-- HEADER -->
          <h1 class='text-gray-300 text-3xl'>Dashboard</h1>
          <!-- SUB HEADER -->
          <div class='border border-gray-700 rounded w-full mt-4 px-5 py-3 flex justify-between'>
            <div class='flex gap-[20px]'>
              <div class='flex items-center'>
                <div class='h-[20px] w-[20px] bg-red-500 rounded'></div>
                <h3 class='text-lg text-gray-400 ms-3'>Expired</h3>
              </div>
              <div class='flex items-center'>
                <div class='h-[20px] w-[20px] bg-blue-500 rounded'></div>
                <h3 class='text-lg text-gray-400 ms-3'>Soon to expire</h3>
              </div>
            </div>
            <div class='flex gap-[20px]'>
              <button class='border-none rounded ring-inset px-3 py-1 text-gray-300 bg-blue-600 hover:bg-blue-700'>Request form</button>
              <button class='border-none rounded ring-inset px-3 py-1 text-gray-300 bg-red-600 hover:bg-red-700'>Emergency no.</button>
            </div>
          </div>
          <!-- CONTENT -->

          <div class='h-full p-5 overflow-hidden'>
            <table class='min-w-full table-auto border-collapse border border-gray-700'>
              <caption class="caption-top text-gray-500 text-sm pb-4">
                Table: Brand of medicines and their remaining stocks, expiration, and storage.
              </caption>
              <thead class="sticky top-0">
                <tr>
                  <th class='px-5 py-2 text-gray-300 text-start font-medium border border-gray-600'>Brand</th>
                  <th class='px-5 py-2 text-gray-300 text-start font-medium border border-gray-600'>Remaining</th>
                  <th class='px-5 py-2 text-gray-300 text-start font-medium border border-gray-600'>Expiration</th>
                  <th class='px-5 py-2 text-gray-300 text-start font-medium border border-gray-600'>Storage</th>
                </tr>
              </thead>
              <tbody class="overflow-y-auto">
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Jan 01, 2023</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Jan 01, 2023</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Jan 01, 2023</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Jan 01, 2023</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Jan 01, 2023</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-red-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Jan 01, 2024</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Jan 01, 2024</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Jan 01, 2024</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Jan 01, 2024</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
                <tr class='hover:bg-gray-900/20'>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>Test Medicine</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-gray-400 text-start font-medium border border-gray-600'>100</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Jan 01, 2024</td>
                  <td class='px-5 py-3 bg-gray-700/20 text-blue-400 text-start font-medium border border-gray-600'>Storage A</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" class="px-5 pb-2 pt-3 text-gray-300 text-end">
                    <button class='border px-3 border-gray-500 rounded font-bold hover:bg-gray-700/20'>
                      << 
                    </button>
                    <button class='border px-3 border-gray-600 rounded hover:bg-gray-700/20'>1</button>
                    <button class='border px-3 border-gray-600 rounded hover:bg-gray-700/20'>2</button>
                    <button class='border px-3 border-gray-600 rounded hover:bg-gray-700/20'>3</button>
                    <button class='border px-3 border-gray-500 rounded font-bold hover:bg-gray-700/20'>
                      >>
                    </button>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>