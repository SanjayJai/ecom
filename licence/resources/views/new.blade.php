<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Advanced Tailwind Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Advanced Form</h2>

    <form class="space-y-6">

      <!-- Floating Label Input -->
      <div class="relative">
        <input type="text" id="name" name="name" placeholder=" " required
          class="peer w-full border border-gray-300 rounded-xl px-4 pt-6 pb-2 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
        <label for="name"
          class="absolute left-4 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">Full Name</label>
      </div>

      <!-- Email Input with error -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email"
          class="w-full border border-red-500 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" />
        <p class="text-sm text-red-500 mt-1">Please enter a valid email address.</p>
      </div>

      <!-- Password with strength indicator -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password"
          class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <div class="mt-1 text-xs text-gray-500">At least 8 characters, with one number and one special character.</div>
      </div>

      <!-- Toggle Switch -->
      <div class="flex items-center justify-between">
        <label for="subscribe" class="text-sm font-medium text-gray-700">Subscribe to newsletter</label>
        <input type="checkbox" id="subscribe" name="subscribe"
          class="toggle bg-gray-300 relative w-12 h-6 rounded-full appearance-none cursor-pointer transition checked:bg-blue-500" />
      </div>

      <!-- Custom File Upload -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Resume</label>
        <input type="file" name="resume"
          class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" />
      </div>

      <!-- Multi-select Dropdown -->
      <div>
        <label for="skills" class="block text-sm font-medium text-gray-700 mb-1">Skills</label>
        <select id="skills" name="skills[]" multiple
          class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option>HTML</option>
          <option>CSS</option>
          <option>JavaScript</option>
          <option>PHP</option>
          <option>Laravel</option>
        </select>
        <p class="text-xs text-gray-400 mt-1">Hold Ctrl (or Cmd) to select multiple.</p>
      </div>

      <!-- Date Picker (you can use JS plugin for better UI) -->
      <div>
        <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
        <input type="date" id="dob" name="dob"
          class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- Submit Button -->
      <div class="text-right">
        <button type="submit"
          class="bg-blue-600 text-white px-6 py-2 rounded-xl hover:bg-blue-700 transition shadow-md">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
