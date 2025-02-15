<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Send message</button>
            </form>

        </div>
      </section>
</x-layout>

<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">

        <p class="my-6 text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and interactive elements built for better web.</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="/" class="mr-4 hover:underline md:mr-6 ">Home</a>
            </li>
            <li>
                <a href="/blog" class="mr-4 hover:underline md:mr-6">Blog</a>
            </li>
            <li>
                <a href="/team" class="mr-4 hover:underline md:mr-6 ">Team</a>
            </li>
            <li>
                <a href="/contact" class="mr-4 hover:underline md:mr-6">contact</a>
            </li>
            <li>
                <a href="/seting" class="mr-4 hover:underline md:mr-6">seting</a>
            </li>
            <li>
                <a href="/signout" class="mr-4 hover:underline md:mr-6">signout</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024-2025 <a href="#" class="hover:underline">TeamBlog™</a>. All Rights Reserved.</span>
    </div>
  </footer>
