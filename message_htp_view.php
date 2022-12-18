<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="message_htp.css">
    <title>Hospital Message Diary</title>
</head>
<body>
<section class="text-gray-400 bg-gray-900 body-font overflow-hidden md:flex">
  <div class="card">
    <div class="container px-5 py-24 mx-auto">
      <div class="-my-8 divide-y-2 divide-gray-800">
        <div class="py-8 flex flex-wrap md:flex-nowrap">
          <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-white">SenderID-Name</span>
            <span class="mt-1 text-gray-500 text-sm">Date of Sending</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-white title-font mb-2">Title of message</h2>
            <p class="leading-relaxed">Message</p>
            <a class="text-indigo-400 inline-flex items-center mt-4" href="send_reply.php">Reply
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>